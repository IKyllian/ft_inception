FROM debian:buster

COPY /config /config

RUN apt-get update \
	&& apt-get install -y wget php /
	php-fpm php-mysql php-mbstring php-zip php-gd php-xml php-pear php-gettext php-cgi

RUN service php7.3-fpm start \
	&& mkdir -p /var/www/html \
	&& wget https://wordpress.org/latest.tar.gz -P /tmp && tar xf /tmp/latest.tar.gz -C /var/www/html \
	&& chown -R www-data: /var/www/html/wordpress \
	&& mv config/wp-config.php var/www/html/wordpress \
	&& mv config/www.conf etc/php/7.3/fpm/pool.d/www.conf \
	&& wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar -P /tmp \
	&& chmod +x /tmp/wp-cli.phar \
	&& mv /tmp/wp-cli.phar /usr/local/bin/wp

EXPOSE 9000

CMD ["sleep", "infinity"]