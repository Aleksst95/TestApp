# Example
# make start build=1
start:
	rm -f ./storage/logs/*.log	rm -f ./storage/logs/*.txt
	docker-compose --env-file=./docker/.env up $(if $(build), --build, ) -d

stop:
	docker-compose --env-file=./docker/.env down

# Example:
# make create-migration name=createTable
create-migration:
	docker exec --user=1000 alex-test-php-fpm php artisan make:migration $(name)

migrate:
	docker exec --user=1000 alex-test-php-fpm php artisan migrate

composer-install:
	docker exec --user=1000 alex-test-php-fpm composer install

analyze:
	docker exec --user=1000 alex-test-php-fpm composer analyze

psalm:
	docker exec --user=1000 alex-test-php-fpm composer psalm

phpstan:
	docker exec --user=1000 alex-test-php-fpm composer phpstan

phpcs:
	docker exec --user=1000 alex-test-php-fpm composer phpcs
