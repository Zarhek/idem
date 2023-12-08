FROM php:8.1-apache
RUN apt-get update && apt-get install -y libzip-dev zlib1g-dev zip && docker-php-ext-install mysqli pdo pdo_mysql zip 
