all:

up: cp-local-config
	cd docker && docker-compose up -d

up-force: cp-local-config
	cd docker && docker-compose up -d --force-recreate --build

stop: cp-local-config
	cd docker && docker-compose stop

down: cp-local-config
	cd docker && docker-compose down

php: cp-local-config
	docker exec -ti php_fpm bash

db: cp-local-config
	docker exec -ti db bash

build: cp-local-config
	cd docker && docker-compose build

status: cp-local-config
	cd docker && docker-compose ps

restart: stop up

restart-force: down up-force

docker/php-fpm/local.ini:
	cp -v docker/php-fpm/local.ini-example docker/php-fpm/local.ini

cp-local-config: docker/php-fpm/local.ini

redis-clear:
	docker exec -i redis sh -c "redis-cli flushall"