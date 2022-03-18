FROM debian:buster

RUN apt-get update \
	&& apt-get install -y expect mariadb-server mariadb-client \
	&& mv /srcs/config_mariadb.sh /var/www/html \
	&& sh /var/www/html/config_mariadb.sh \



EXPOSE 80 443

CMD ["nginx", "-g", "daemon off;"]