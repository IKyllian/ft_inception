VOLUME_PATH = /home/kdelport/data/

all : build

build :
	mkdir -p $(VOLUME_PATH)db
	mkdir -p $(VOLUME_PATH)wp
	docker-compose -f ./srcs/docker-compose.yml --env-file ./srcs/.env up --build -d

stop :
	docker-compose -f ./srcs/docker-compose.yml --env-file ./srcs/.env down

clean :
	docker-compose -f ./srcs/docker-compose.yml --env-file ./srcs/.env down --rmi all

fclean :
	docker-compose -f ./srcs/docker-compose.yml --env-file ./srcs/.env down --rmi all -v
	rm -rf $(VOLUME_PATH)db
	rm -rf $(VOLUME_PATH)wp

clean_all :
	docker-compose -f ./srcs/docker-compose.yml --env-file ./srcs/.env down --rmi all -v
	rm -rf $(VOLUME_PATH)db
	rm -rf $(VOLUME_PATH)wp
	docker system prune -a

re : stop build

reset :
	"docker stop $(docker ps -qa); docker rm $(docker ps -qa); docker rmi -f $(docker images -qa); docker volume rm $(docker volume ls -q); docker network rm $(docker network ls -q) 2>/dev/null"

.PHONY: fclean all clean clean_all stop build re reset