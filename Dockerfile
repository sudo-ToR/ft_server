# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: lnoirot <marvin@42.fr>                     +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/01/17 14:40:18 by lnoirot           #+#    #+#              #
#    Updated: 2020/01/20 19:23:24 by lnoirot          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM 	debian:buster

 RUN	apt update && apt upgrade \
	&& apt install -y wget \
	&& apt install -y nginx \
	&& apt install -y php7.3 php7.3-fpm php-curl php-gd php-intl php-mbstring php-soap php-xml php-xmlrpc php-zip \
	&& apt install -y openssl \
	&& apt install -y php-mysql \
	&& apt install -y default-mysql-server

#Install phpmyadmin 
RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.tar.gz && \
	tar xvf phpMyAdmin-4.9.0.1-all-languages.tar.gz && \
	mv phpMyAdmin-4.9.0.1-all-languages/ /var/www/html/phpmyadmin

#init wordpress
RUN wget https://wordpress.org/latest.tar.gz && \
	tar xzvf latest.tar.gz && \
	cp -r wordpress /var/www/html/

RUN chown www-data:www-data /var/www/html -R

COPY	./srcs/start_server.sh /tmp/
COPY	./srcs/default /etc/nginx/sites-available
COPY	./srcs/ssl-cert-snakeoil.pem /etc/ssl/certs/
COPY	./srcs/ssl-cert-snakeoil.key /etc/ssl/private/
COPY	./srcs/wp-config.php /var/www/html/wordpress/
COPY	./srcs/default-user.sql /tmp/



EXPOSE	80
EXPOSE	443

CMD	sh /tmp/start_server.sh \
	&& sleep infinity & wait 
