FROM debian:buster

RUN apt-get update \
	apt-get install -y mariadb-server

RUN service mysql start

EXPOSE 3306

CMD ["mysqld"]