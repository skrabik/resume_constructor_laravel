FROM php:fpm

RUN apt-get update && apt-get upgrade -y 
RUN apt-get install git -y
RUN apt-get install zip -y

WORKDIR /var/www/laravel

RUN curl -sS https://getcomposer.org/installer | php
RUN docker-php-ext-install pdo pdo_mysql
# RUN php artisan migrate

