PATH = /home/kdelport/data/

all: build

build:
    mkdir -p $(PATH)db
    mkdir -p $(PATH)wp
    docker-compose -f srcs/docker-compose.yml up --build -d

stop:
    docker-compose -f srcs/docker-compose.yml down

clean:
    docker-compose -f srcs/docker-compose.yml down --rmi all

fclean:
    docker-compose -f srcs/docker-compose.yml down --rmi all -v
    rm -rf $(PATH)

clean_all:
    docker-compose -f srcs/docker-compose.yml down --rmi all -v
    rm -rf $(PATH)db
	rm -rf $(PATH)wp
    docker system prune -a

re: stop build

reset:
    "docker stop $(docker ps -qa); docker rm $(docker ps -qa); docker rmi -f $(docker images -qa); docker volume rm $(docker volume ls -q); docker network rm $(docker network ls -q) 2>/dev/null"

.PHONY: fclean all clean clean_all stop build re reset