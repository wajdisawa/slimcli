#!makefile

.PHONY: build
build: ## build and run service
	docker-compose up --build

.PHONY: run
run: ## run service
	docker-compose up -d
	docker-compose exec slimcli-service composer install

.PHONY: stop
stop: ## stop service
	docker-compose down --remove-orphans

.PHONY: enter
enter: ## enter service
	docker-compose exec slimcli-service /bin/ash

.PHONY: logs
logs: ## logs service
	docker-compose logs --follow slimcli-service

.PHONY: static-analysis
static-analysis: ## static code analyze
	docker-compose run -T --rm slimcli-service vendor/bin/phpstan --level=5 analyse src

.PHONY: help
help: ## help
	@grep -E '^[0-9a-zA-Z_/()$$-]+:.*?## .*$$' $(lastword $(MAKEFILE_LIST)) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'