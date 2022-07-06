up:
	docker-compose up -d
down:
	docker-compose down
build:
	cp .env.example .env
	docker-compose build --no-cache --force-rm
rebuild:
	docker-compose build --no-cache --force-rm
console:
	docker-compose exec php-fpm bash
