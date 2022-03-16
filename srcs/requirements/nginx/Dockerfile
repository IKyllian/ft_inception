FROM debian:buster

WORKDIR /

RUN apt-get update \
	&& apt-get install -y nginx \
	&& mkdir /etc/nginx/ssl \
	openssl req -sha256 -new -newkey rsa:2048 -keyout /etc/nginx/ssl/private_key \
	-out mycsr.csr



EXPOSE 80 443