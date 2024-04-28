FROM php:fpm

RUN apt-get update && apt-get upgrade -y 
RUN apt-get install git -y
RUN apt-get install zip -y

WORKDIR /var/www/laravel

RUN curl -sS https://getcomposer.org/installer | php
# RUN php composer.phar update

