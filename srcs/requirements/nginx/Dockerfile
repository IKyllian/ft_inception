FROM debian:buster

WORKDIR /

RUN apt-get update \
	&& apt-get install -y nginx \
	&& mkdir /etc/nginx/ssl \
	openssl req -nodes -sha256 -newkey rsa:2048 \
	-subj "" \
	-keyout /etc/nginx/ssl/private.key \
	-out /etc/nginx/ssl/certificate.csr



EXPOSE 80 443

CMD ["nginx", "-g", "daemon off;"]