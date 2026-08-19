#!/usr/bin/env bash
# G2 重复闸 —— php / js 生成代码重复顶层声明检测。
#
# 背景（实测，非推断）：
#   · php：`php -l` 能抓重复 `use`（编译期符号表冲突），但对同一文件内两个
#     `class Foo` 一律 exit 0 —— 那是运行期错误，lint 阶段看不到。
#   · js/ts：`tsc --noEmit` 对重复的 `export interface Foo` 走 declaration merging，
#     静默通过；只有同一 interface 内重复成员才报 TS2300。
# 故两者都需要显式的重复声明检测。
#
# 用法：dup-check.sh <php|ts> <目录>
#       dup-check.sh <php|ts> <目录> --strict-list <清单文件>
#
# --strict-list 接一个文件列表（每行一个路径，形态需与 find <目录> 的输出一致）。
# 给了它就切到**分级**模式：目录照样全量扫，但只有清单内的文件命中才影响退出码
# （标 [严格]），清单外的命中只打印（标 [告警]）。清单为空文件 = 本轮没有需要严格
# 判定的对象，届时全部只告警。
# 为什么要分级、清单从哪来，见 scripts/ci-syntax.sh 文件头；决策与
# ucloud-sdk-release/scripts/python-fatal-check.sh 2026-07-31 那次同源。
# 不给 --strict-list 时行为与分级改造前完全一致：全量扫、任一命中即 exit 1，
# 本地手工排查和其他调用方不受影响。
#
# 退出码：0 = 无严格命中；1 = 有严格命中；2 = 参数错误

set -uo pipefail

if [ "$#" -lt 2 ]; then
  echo "用法: dup-check.sh <php|ts> <目录> [--strict-list <清单文件>]" >&2
  exit 2
fi

lang="$1"
root="$2"
shift 2

strict_list=""
graded=0
while [ "$#" -gt 0 ]; do
  case "$1" in
    --strict-list)
      if [ "$#" -lt 2 ]; then
        echo "--strict-list 需要一个清单文件参数" >&2
        exit 2
      fi
      strict_list="$2"
      graded=1
      shift 2
      ;;
    *)
      echo "未知参数: $1（用法: dup-check.sh <php|ts> <目录> [--strict-list <清单文件>]）" >&2
      exit 2
      ;;
  esac
done

# 清单文件不存在时不能默默当成「清单为空」——那会把所有命中降级成告警，等于静默放行。
if [ "$graded" -eq 1 ] && [ ! -f "$strict_list" ]; then
  echo "--strict-list 指定的清单文件不存在: $strict_list" >&2
  exit 2
fi

case "$lang" in
  php)
    ext='*.php'
    # 顶层 class / interface / trait 声明；兼容 final / abstract 前缀
    pattern='^[[:space:]]*(final[[:space:]]+|abstract[[:space:]]+)?(class|interface|trait)[[:space:]]+[A-Za-z0-9_]+'
    ;;
  ts)
    ext='*.ts'
    # 导出的顶层 interface / class / type / enum 声明
    pattern='^export[[:space:]]+(interface|class|type|enum)[[:space:]]+[A-Za-z0-9_]+'
    ;;
  *)
    echo "不支持的语言: $lang（仅 php / ts）" >&2
    exit 2
    ;;
esac

strict_findings=0
warn_findings=0
scanned=0

while IFS= read -r f; do
  scanned=$((scanned + 1))
  # 抽出声明名（每行最后一个标识符），排序后取重复项
  dups=$(grep -oE "$pattern" "$f" 2>/dev/null | awk '{print $NF}' | sort | uniq -d)
  if [ -n "$dups" ]; then
    while IFS= read -r name; do
      [ -z "$name" ] && continue
      lines=$(grep -nE "$pattern" "$f" | awk -v want="$name" '$NF==want || $0 ~ ("[[:space:]]"want"([[:space:]]|\\{|$)") {split($0,a,":"); printf "%s,", a[1]}')
      if [ "$graded" -eq 0 ]; then
        echo "  ${f}:${lines%,} 重复声明 '${name}'"
        strict_findings=$((strict_findings + 1))
      elif grep -Fxq -- "$f" "$strict_list"; then
        echo "  [严格] ${f}:${lines%,} 重复声明 '${name}'"
        strict_findings=$((strict_findings + 1))
      else
        echo "  [告警] ${f}:${lines%,} 重复声明 '${name}'（存量，非本轮变更，不阻断）"
        warn_findings=$((warn_findings + 1))
      fi
    done <<< "$dups"
  fi
done < <(find "$root" -name "$ext" -type f)

if [ "$strict_findings" -gt 0 ]; then
  echo "G2 重复闸失败：严格 $strict_findings 处 / 告警 $warn_findings 处（扫描 $scanned 个文件）"
  exit 1
fi

if [ "$warn_findings" -gt 0 ]; then
  echo "G2 重复闸通过：本轮变更文件无重复；另有 $warn_findings 处存量重复只告警（扫描 $scanned 个文件）"
  exit 0
fi

echo "G2 重复闸通过：$scanned 个文件无重复顶层声明"
exit 0
