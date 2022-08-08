FROM	alpine:3.15
RUN	apk update
RUN	apk add --no-cache --quiet --update nginx
RUN	apk add --no-cache --quiet --update openssl
RUN	mkdir -p /etc/nginx/ssl


RUN 	openssl req -x509 -nodes -days 365 \
	-out /etc/nginx/ssl/lxu-wu.42.fr.crt \	
	-keyout /etc/nginx/ssl/lxu-wu.42.fr.key \
	-subj "/C=BE/ST=Belgium/L=Brussels/O=42/OU=19/CN=lxu-wu.42.fr/UID=lxu-wu"

RUN 	mkdir -p /var/run/nginx
COPY	conf/nginx.conf /etc/nginx/http.d/default.conf
EXPOSE	443
CMD	[ "nginx", "-g", "daemon off;" ]
