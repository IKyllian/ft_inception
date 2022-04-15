FROM debian:buster

RUN apt-get update \
	&& apt-get install -y mariadb-server mariadb-client

# COPY conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

ARG DB_NAME
ARG DB_USER
ARG DB_PASS

RUN service mysql start \
	&& mariadb -u root -e \
    "CREATE DATABASE ${DB_NAME}; \
    CREATE USER ${DB_USER}@'%' IDENTIFIED BY '${DB_PASS}'; \
    GRANT ALL PRIVILEGES ON ${DB_NAME}.* TO ${DB_USER}@'%'; \
  	FLUSH PRIVILEGES;"

EXPOSE 3306

CMD ["mysqld", "--bind-address=0.0.0.0"]