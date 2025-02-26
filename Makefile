CONTAINER=ecommerce_scraper

up:
	docker compose up --build -d

down:
	docker compose down --volumes

restart:
	make down
	make up

permissions:
	docker exec -it $(CONTAINER) chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache /var/www/storage/logs /var/www/storage/framework
	docker exec -it $(CONTAINER) chmod -R 777 /var/www/storage /var/www/bootstrap/cache /var/www/storage/logs /var/www/storage/framework

setup:
	make up
	make permissions
	make install

install:
	docker exec $(CONTAINER) composer install
	docker exec $(CONTAINER) php artisan key:generate
	docker exec $(CONTAINER) php artisan migrate --seed

rebuild:
	make down
	docker compose build --no-cache
	make up
	make permissions
	make install
