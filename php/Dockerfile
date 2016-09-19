FROM php:5.6-apache

RUN docker-php-ext-install mysqli mysql pdo_mysql
RUN a2enmod rewrite
RUN a2enmod ssl

RUN openssl req -new -x509 -days 365 -nodes -out /etc/ssl/certs/ssl-cert-snakeoil.pem -keyout /etc/ssl/private/ssl-cert-snakeoil.key -subj "/C=BR/ST=Santa Catarina/L=Tubarao/O=MioloAzul/CN=*.mioloazul.com.br"

RUN a2ensite default-ssl
