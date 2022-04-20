FROM debian:buster

COPY /config /config

ARG DB_NAME
ARG DB_USER
ARG DB_PASS
ARG DB_HOST

RUN apt-get update \
	&& apt-get install -y wget php-fpm php-mysql php-mbstring php-zip php-gd php-xml php-pear php-gettext php-cgi

RUN service php7.3-fpm start \
	&& mkdir -p /var/www/html \
	&& wget https://wordpress.org/latest.tar.gz -P /tmp && tar xf /tmp/latest.tar.gz -C /var/www/html \
	&& chown -R www-data: /var/www/html/wordpress \
	&& mv config/wp-config.php var/www/html/wordpress \
	&& mv config/www.conf etc/php/7.3/fpm/pool.d/www.conf \
	&& wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar -P /tmp \
	&& chmod +x /tmp/wp-cli.phar \
	&& mv /tmp/wp-cli.phar /usr/local/bin/wp

RUN sed -i "s/database_name_here/${DB_NAME}/g" var/www/html/wordpress/wp-config.php \
	&& sed -i "s/username_here/${DB_USER}/g" var/www/html/wordpress/wp-config.php \
	&& sed -i "s/password_here/${DB_PASS}/g" var/www/html/wordpress/wp-config.php \
	&& sed -i "s/db_host_here/${DB_HOST}/g" var/www/html/wordpress/wp-config.php

EXPOSE 9000

CMD sh config/script.sh