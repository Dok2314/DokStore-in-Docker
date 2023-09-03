build:
	docker-compose up -d

bash:
	docker exec -it DokStoreApp sh

migrate:
	docker exec -it DokStoreApp php artisan migrate

migrate-fresh:
	docker exec -it DokStoreApp php artisan migrate:fresh

ps:
	docker ps
