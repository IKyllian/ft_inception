#!/bin/bash

wp --allow-root --path='/var/www/html/wordpress/' core install --url=$WP_URL --title=$WP_TITLE --admin_user=$WP_ADMIN --admin_password=$WP_ADMIN_PASS --admin_email=$WP_ADMIN_MAIL 
wp --allow-root --path='/var/www/html/wordpress/' user create $WP_USER $WP_USER_MAIL --user_pass=$WP_USER_PASS

php-fpm7.3 -R -F
#sleep infinity
