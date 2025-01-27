FROM php:8.3-apache

WORKDIR /var/www/html

# Installing required Php extensions
RUN docker-php-ext-install pdo pdo_mysql


COPY index.php .
