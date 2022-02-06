FROM php:8.1-apache

#Install git and MySQL extensions for PHP

RUN docker-php-ext-install bcmath mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql


#RUN docker-php-ext-install pdo pdo_mysql mysqli bcmath mbstring xml curl

#RUN update-alternatives --set php /usr/bin/php8.1
#RUN a2enmod rewrite

COPY src /var/www/html/
EXPOSE 80/tcp
EXPOSE 443/tcp