install:
	composer install

# PR 门禁的语法闸。只判「生成的代码能不能用」，不判风格——风格归 lint。
# 两段判据互补，缺一不可：
#   G1 `php -l`：抓解析错误，以及编译期符号冲突（模板漏去重导致的重复 `use`
#      就在这里暴露，PHP 会直接 fatal）。
#   G2 `dup-check.sh`：抓同一文件里重复的顶层 class/interface/trait。
#      这类重复 `php -l` 一律 exit 0——它属于运行期错误，lint 阶段看不见，
#      所以必须单独查一遍，不能只靠 G1。
#
# 两段都全量扫 src/，但退出码只由本轮变更的文件决定，存量问题只告警：整棵树一律
# 阻断会让任意一个产品的 codegen PR 被 12 个无关产品的存量坏文件拦死、自动合并失效。
# 同一决策在 python 侧已有先例，见 ucloud-sdk-release/scripts/python-fatal-check.sh
# 文件头（2026-07-31）。变更集怎么算、退化到严格的条件、`php -l` 退 255 掐断 xargs
# 那个坑怎么绕，全部在 scripts/ci-syntax.sh 文件头，改之前先读那里。
ci-syntax:
	@bash $(CURDIR)/scripts/ci-syntax.sh

lint:
	php vendor/bin/phpcs --ignore=./src/Core/Logger/compatibility/*.php -n

compatible:
	php vendor/bin/phpcs --config-set installed_paths vendor/phpcompatibility/php-compatibility
	php vendor/bin/phpcs --config-set testVersion 5.6
	php vendor/bin/phpcs -p --standard=PHPCompatibility --ignore=./src/Core/Logger/compatibility/*.php src

fmt:
	php vendor/bin/phpcbf

build:
	composer dump-autoload

test:
	php vendor/bin/phpunit tests/*

# 同时出 HTML 与 clover：HTML 给 `make cov-show` 本地看，clover 给 CI 传 codecov。
# 旧的 php.yml 是在 workflow 里裸跑 phpunit 才拿到 coverage.xml 的；现在语言命令
# 一律只经 Makefile 走，这个产物就得由 target 自己出，否则上传步骤没东西可传。
test-cov:
	UCLOUD_PUBLIC_KEY=foo UCLOUD_PRIVATE_KEY=bar UCLOUD_PROJECT_ID=oas \
	XDEBUG_MODE=coverage php vendor/bin/phpunit --testsuite=unit --coverage-html=build/coverage --coverage-clover=coverage.xml

cov-show:
	open build/coverage/index.html

gen:
	ucloud-spec create opensdk \
		--only "UFS" \
    	--only "UDisk" \
    	--only "UHost" \
    	--only "PathX" \
    	--only "UDDB" \
    	--only "UCDN" \
    	--only "UNet" \
    	--only "VPC2.0" \
    	--only "UDB" \
    	--only "UMem" \
    	--only "ULB" \
    	--only "Cube" \
    	--only "UK8S" \
    	--only "IPSecVPN" \
    	--only "UAccount" \
    	--only "UDPN" \
    	--only "UBill" \
    	--only "UPHost" \
    	--only "UFile" \
    	--only "USMS" \
    	--only "UEC" \
    	--only "UPhone" \
		--public \
		-s $(HOME)/.oas/vcs/git.ucloudadmin.com/apispec/apispec/specification \
		$(HOME)/.oas/vcs/git.ucloudadmin.com/apispec/template-opensdk-php .
