FROM php:7.2.2-apache 

WORKDIR /var/www/html/

COPY ./app .

RUN docker-php-ext-install mysqli