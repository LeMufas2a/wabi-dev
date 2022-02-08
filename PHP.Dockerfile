FROM php:7.4-apache
#FROM php:fpm-alpine  

RUN apt update 
RUN apt install -y zip
RUN apt install -y libzip-dev
RUN apt install -y libicu-dev
RUN apt install -y libpng-dev

RUN docker-php-ext-install pdo 
RUN docker-php-ext-install intl
RUN docker-php-ext-install zip
RUN docker-php-ext-install calendar
RUN docker-php-ext-install exif
RUN docker-php-ext-install gd 
#RUN docker-php-ext-install pdo
#            intl \ 
#            opcache \
#            pdo \
#            pdo_pgsql \
#            pgsql \
RUN chown -R $USER:www-data /var
RUN chmod -R 777 /var
COPY public/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY . /var/www/html
WORKDIR /var/www/html


RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
#RUN composer dump-autoload

RUN composer install 
RUN composer update --no-scripts --ignore-platform-reqs

EXPOSE 80