#!/usr/bin/env bash
# PR 门禁的语法闸。两段判据（G1 php -l / G2 dup-check.sh）都**全量**扫 src/，
# 但退出码只由「本轮变更的那批文件」决定，其余文件的问题降级为告警。
#
# ── 为什么要分级，而不是整棵树一律阻断 ──────────────────────────────────────
# 仓里存量有 23 个 *Response.php 带重复 `use`（12 个产品、81 行），PHP 编译期 fatal。
# 整棵树一律阻断意味着：发布**任意一个**产品的 codegen PR 都会被这些与本次发布毫无
# 关系的存量问题拦红 → check 变红 → mergeable_state 转 unstable → 自动合并永久失效。
# 而这 23 个文件是生成产物，只有对应产品各自重新发布才会被修好的模板覆盖，等多久不可控。
#
# 同一后果在 python 侧已经被实证并明确否决过：2026-07-30 的 pipeline 2507836 发的是
# UHost+UAI-Modelverse、根本没重新生成 uphost，uphost 的存量问题照样被扫了出来，证明
# 来源是 clone 下来的存量代码而非本轮产物。当时（2026-07-31）定的处置是「判定边界取本轮
# 变更文件，存量只告警」，落地在 ucloud-sdk-release/scripts/python-fatal-check.sh，那个
# 文件头有完整推导。本脚本是同一决策在 php 仓 GitHub Actions 上的落地。
#
# 存量仍然全量扫、全量打印：不阻断不等于不看见，债务要保持可见、可度量，
# 也才能在某个产品重新发布后观察到告警条目变少。
#
# ── 变更集从哪来 ────────────────────────────────────────────────────────────
# CI 通过环境变量 CI_BASE_SHA 传入基线 commit（见 .github/workflows/ci.yml）：
#   pull_request → github.event.pull_request.base.sha
#   push         → github.event.before
# 严格集 = `git diff --name-only $CI_BASE_SHA...HEAD` 结果里 src/ 下的 .php。
# 用三点而非两点：基线分支在 PR 开着的这段时间往前走过时，三点只算 PR 自己引入的改动，
# 不会把别人合进 master 的文件算成本轮变更。
#
# python 侧取的是「工作区 vs HEAD」，这里不能照抄：那个脚本跑在代码生成之后、git commit
# 之前，工作区差异恰好等于即将进 PR 的文件；php 仓的 CI 跑在 PR 已经成型之后，工作区是
# 干净的，只能靠 base sha 反推。
#
# fail-closed：CI_BASE_SHA 未设置、给了但解析不出 commit（浅克隆没取到、force push 后
# 基线被回收）、或 git diff 本身失败，一律退回整棵树严格判定并打印退回原因。
# 宁可误红让人来看，不可静默放行。
#
# 本地开发者直接 `make ci-syntax`（不设该变量）看到的就是整棵树严格判定，与分级改造前
# 完全一致——不制造「本地绿 / CI 红」或反过来的陷阱。

set -uo pipefail

SRC_DIR=src
SCRIPT_DIR="$(cd "$(dirname "$0")" && pwd)"

# 变更集的路径来自 git（相对仓库根），扫描集的路径来自 find src（相对 cwd），
# 两边形态必须一致才对得上，故统一站到仓库根执行。
repo_root="$(git rev-parse --show-toplevel 2>/dev/null || true)"
if [ -n "$repo_root" ]; then
	cd "$repo_root" || { echo "FATAL: 无法进入仓库根 $repo_root" >&2; exit 1; }
fi

if [ ! -d "$SRC_DIR" ]; then
	echo "FATAL: 未找到 ${SRC_DIR}/，无法执行语法闸（当前目录 $(pwd)）" >&2
	exit 1
fi

tmpdir="$(mktemp -d)"
trap 'rm -rf "$tmpdir"' EXIT
strict_list="$tmpdir/strict.list"
: > "$strict_list"

# ── 1. 算严格集 ─────────────────────────────────────────────────────────────
strict_all=1
fallback_reason=""
base="${CI_BASE_SHA:-}"

if [ -z "$base" ]; then
	fallback_reason="CI_BASE_SHA 未设置（本地执行，或 CI 事件没有基线可取）"
elif [ -z "$repo_root" ]; then
	fallback_reason="当前目录不是 git 仓库，拿不到 ${base} 的变更集"
elif ! git rev-parse --verify --quiet "${base}^{commit}" >/dev/null 2>&1; then
	# 新建分支的 push 事件里 github.event.before 是全 0；浅克隆没有 fetch-depth: 0 时
	# 基线 commit 不在本地；force push 后旧基线可能已被回收。三种都落在这里。
	fallback_reason="CI_BASE_SHA=${base} 解析不出 commit（浅克隆未取到 / 基线已被回收 / 全 0 占位）"
elif ! git diff --name-only --diff-filter=d "${base}...HEAD" -- "$SRC_DIR" > "$tmpdir/diff.raw" 2>"$tmpdir/diff.err"; then
	fallback_reason="git diff ${base}...HEAD 失败：$(tr '\n' ' ' < "$tmpdir/diff.err")"
else
	# --diff-filter=d 排除删除项：删掉的文件不在磁盘上，扫不了也不该扫。
	grep -E '\.php$' < "$tmpdir/diff.raw" | sort -u > "$strict_list"
	strict_all=0
fi

if [ "$strict_all" -eq 1 ]; then
	echo "语法闸判定模式：整棵树严格（src/ 下所有问题都阻断）"
	echo "  退回原因：${fallback_reason}"
else
	strict_count="$(wc -l < "$strict_list" | tr -d ' ')"
	echo "语法闸判定模式：分级（严格集 = ${base}...HEAD 在 ${SRC_DIR}/ 下变更的 ${strict_count} 个 .php）"
	if [ "$strict_count" -eq 0 ]; then
		echo "  本轮没有 ${SRC_DIR}/ 下的 .php 变更，src/ 的问题全部只告警。"
	else
		sed 's/^/    /' "$strict_list"
	fi
fi

# 严格集为空时 grep -Fxq 恒假，正好等价于「全部告警」，无需特判。
is_strict() {
	[ "$strict_all" -eq 1 ] && return 0
	grep -Fxq -- "$1" "$strict_list"
}

# php -l 的原始报错，一个文件只留一行。
# 滤 Deprecated：PHP 8.4 会对生成代码的隐式 nullable 参数刷屏，那是风格问题、归 lint 管。
# 滤空行并只取首行：php -l 会把同一条错误打两遍（log_errors 走 stderr 的 "PHP Xxx error:"，
# display_errors 走 stdout 的 "Xxx error:"，中间还夹一个空行），重复打没有信息量。
php_lint_message() {
	php -l "$1" 2>&1 \
		| grep -v '^PHP Deprecated:' | grep -v '^Deprecated:' \
		| grep -v '^[[:space:]]*$' | head -1
}

# ── 2. G1 语法闸：php -l ───────────────────────────────────────────────────
find "$SRC_DIR" -name '*.php' -type f -print0 > "$tmpdir/files.z"
total="$(tr -dc '\0' < "$tmpdir/files.z" | wc -c | tr -d ' ')"

echo
echo "==> G1 语法闸：php -l 遍历 ${SRC_DIR}/（${total} 个文件）"
echo "    抓解析错误，以及编译期符号冲突——模板漏去重导致的重复 \`use\` 就在这里 fatal。"

export G1_RESULTS="$tmpdir/g1.results"
: > "$G1_RESULTS"

# 关于退出码（实测，非推断）：`php -l` 失败时退出码是 255，而 GNU xargs 见到 255 会**立刻
# 中止**、不再读后续输入——结果只报出第一个坏文件，后面的全部静默漏掉。macOS 的 BSD xargs
# 没有这个行为，本地跑不出来，会给假安全感（CI 是 GNU）。
# 所以 wrapper 里无论 php 退什么码都 `exit 0`，把「哪个文件坏了」改用结果文件传出，
# 判定完全不依赖 xargs 的退出码。每行都远短于 PIPE_BUF，O_APPEND 追加是原子的，
# -P4 并行不会把行写串。
xargs -0 -P4 -n1 sh -c '
	if php -l "$0" >/dev/null 2>&1; then
		printf "OK\t%s\n" "$0" >> "$G1_RESULTS"
	else
		printf "FAIL\t%s\n" "$0" >> "$G1_RESULTS"
	fi
	exit 0
' < "$tmpdir/files.z"

# 上面那个坑一旦以别的形式复发（换 shell、换 xargs、有人把 exit 0 改回去），表现就是
# 结果行数少于输入文件数。判定不完整即视为失败，绝不当成「没问题」。
scanned="$(wc -l < "$G1_RESULTS" | tr -d ' ')"
if [ "$scanned" -ne "$total" ]; then
	echo "FATAL: G1 只处理了 ${scanned}/${total} 个文件，xargs 提前中止，判定不完整。" >&2
	exit 1
fi

g1_strict=0
g1_warn=0
# 结果按路径排序后再输出：xargs -P4 的完成顺序不确定，不排序的话每次跑出来的行序都不一样，
# 两次 CI 日志没法直接对比。
while IFS= read -r f; do
	[ -z "$f" ] && continue
	if is_strict "$f"; then
		echo "  [严格] $f"
		php_lint_message "$f" | sed 's/^/         /'
		g1_strict=$((g1_strict + 1))
	else
		echo "  [告警] $f （存量，非本轮变更，不阻断）"
		php_lint_message "$f" | sed 's/^/         /'
		g1_warn=$((g1_warn + 1))
	fi
done < <(grep '^FAIL	' "$G1_RESULTS" | cut -f2 | sort)

echo "    G1 结果：严格 ${g1_strict} 处 / 告警 ${g1_warn} 处（扫描 ${scanned} 个文件）"

# ── 3. G2 重复闸：dup-check.sh ─────────────────────────────────────────────
# 同一文件里两个 `class Foo` 这类重复，`php -l` 一律 exit 0——它属运行期错误，
# lint 阶段看不见，所以必须单独查一遍，不能只靠 G1。
echo
echo "==> G2 重复闸：scripts/dup-check.sh（同一文件内重复的顶层 class/interface/trait）"
if [ "$strict_all" -eq 1 ]; then
	bash "$SCRIPT_DIR/dup-check.sh" php "$SRC_DIR"
else
	bash "$SCRIPT_DIR/dup-check.sh" php "$SRC_DIR" --strict-list "$strict_list"
fi
g2_rc=$?

# ── 4. 汇总 ────────────────────────────────────────────────────────────────
echo
if [ "$g1_strict" -gt 0 ] || [ "$g2_rc" -ne 0 ]; then
	echo "语法闸失败：本轮变更的文件里存在语法/重复问题，必须修完再合。"
	exit 1
fi

if [ "$g1_warn" -gt 0 ]; then
	echo "语法闸通过：本轮变更的文件干净；另有 ${g1_warn} 处存量问题只告警（见上方 [告警]）。"
	echo "            存量是生成产物，需对应产品重新发布、由修好的模板覆盖，不手工改。"
else
	echo "语法闸通过。"
fi
exit 0
