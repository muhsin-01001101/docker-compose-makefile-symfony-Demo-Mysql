# This Project LICENSED to https://github.com/muhsin-01001101
# variables
DOCKER_COMPOSE = docker-compose
SYMFONY = bin/console
DOCKER = docker
YARN = yarn
RM = docker container rm $$(docker ps -aq) -f

.PHONY: up
up: ## Run all docker-compose images
		$(DOCKER_COMPOSE) up -d --remove-orphans --no-recreate

.PHONY: down
down: ## Stop and remove all docker-compose images
		$(DOCKER_COMPOSE) down --remove-orphans

.PHONY: ps
ps: ## select all Docker container
	$(DOCKER) ps -a

.PHONY: remove_all_containers
remove_all_containers: ## Remove all containers command
	$(RM)

.PHONY: composer-update
composer-update: ## Update composer
	composer update

## —— Symfony ——
sf: ## List all Symfony commands
	$(SYMFONY)

cc: ## Clear the cache.
	$(SYMFONY) c:c

cc-prod: ## Clear cache for prod
	$(SYMFONY) cache:clear --env=prod

purge: ## Purge cache and logs
	rm -rf var/cache/* var/logs/*

bash: ## Connect to the application container
	$(DOCKER) container exec -it mysql bash

phpunit: ## Execute this command to run tests
	./bin/phpunit

.PHONY: help
help: ## Display this help message
	@cat $(MAKEFILE_LIST) | grep -e "^[a-zA-Z_\-]*: *.*## *" | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'






