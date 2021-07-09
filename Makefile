install:
	composer install

lint:
	php vendor/bin/phpcs -n

fmt:
	php vendor/bin/phpcbf

build:
	composer dump-autoload

test:
	php vendor/bin/phpunit tests/*

test-cov:
	UCLOUD_PUBLIC_KEY=foo UCLOUD_PRIVATE_KEY=bar UCLOUD_PROJECT_ID=oas \
	XDEBUG_MODE=coverage php vendor/bin/phpunit --testsuite=unit --coverage-html=build/coverage

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
		--public \
		-s https://git.ucloudadmin.com/apispec/apispec.git \
		/Users/user/code/oas/plugins/template-opensdk-php .
