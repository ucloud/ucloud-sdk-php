install:
	composer install

lint:
	php vendor/bin/phpcs -n

compatible:
	php vendor/bin/phpcs --config-set installed_paths vendor/phpcompatibility/php-compatibility
	php vendor/bin/phpcs --config-set testVersion 5.6
	php vendor/bin/phpcs -p --standard=PHPCompatibility src

fmt: install
	php vendor/bin/phpcbf || true

build:
	composer dump-autoload

test:
	php vendor/bin/phpunit tests/*

test-cov:
	UCLOUD_PUBLIC_KEY=foo UCLOUD_PRIVATE_KEY=bar UCLOUD_PROJECT_ID=oas \
	XDEBUG_MODE=coverage php vendor/bin/phpunit --testsuite=unit --coverage-html=build/coverage

cov-show:
	open build/coverage/index.html
