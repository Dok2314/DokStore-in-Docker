build:
	docker-compose up -d

bash:
	docker exec -it DokStoreApp sh

migrate:
	docker exec -it DokStoreApp php artisan migrate

migrate-fresh:
	docker exec -it DokStoreApp php artisan migrate:fresh

db-seed:
	docker exec -it DokStoreApp php artisan db:seed

ps:
	docker ps

cache-clear:
	docker exec -it DokStoreApp php artisan cache:clear

