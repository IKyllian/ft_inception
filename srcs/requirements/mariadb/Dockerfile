FROM debian:buster

RUN apt-get update \
	apt-get install -y mariadb-server mariadb-client

# COPY conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

RUN service mysql start \
	&& mariadb -u root -e "CREATE DATABASE ${DB_NAME};\
	CREATE USER ${DB_USER}@'localhost' IDENTIFIED BY '${DB_PASS}';\
	GRANT ALL PRIVILEGES ON ${DB_NAME}.* TO ${DB_USER}@'localhost';\
	FLUSH PRIVILEGES';"

EXPOSE 3306

CMD ["mysqld"]