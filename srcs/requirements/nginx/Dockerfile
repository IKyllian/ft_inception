FROM debian:buster

RUN apt-get update \
	&& apt-get install -y nginx openssl

COPY ./nginx/nginx.conf /etc/nginx/sites-available/default

RUN mkdir /etc/nginx/ssl \
	&& openssl req -nodes -sha256 rsa:2048 -days365 -new -newkey  \
	-keyout /etc/nginx/ssl/private.key \
	-subj "/C=FR/ST=Rhone/L=Lyon/O=42/CN=kdelport.42.fr/emailAddress=kdelport@student.42lyon.fr" \
	-out /etc/nginx/ssl/certificate.crt

EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]