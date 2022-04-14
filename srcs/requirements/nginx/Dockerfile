FROM debian:buster

RUN apt-get update \
	&& apt-get install -y nginx openssl

COPY ./nginx.conf /etc/nginx/sites-available/default

RUN mkdir /etc/nginx/ssl 

RUN openssl req -new -newkey rsa:2048 -days 365 -nodes -sha256 -x509 \
	-keyout /etc/nginx/ssl/private.key \
	-out /etc/nginx/ssl/certificate.crt \
	-subj "/C=FR/ST=Rhone/L=Lyon/O=42/CN=kdelport.42.fr/emailAddress=kdelport@student.42lyon.fr"

EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]