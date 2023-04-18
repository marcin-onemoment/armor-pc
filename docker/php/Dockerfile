FROM php:8.1-fpm-alpine3.14

RUN apk update && apk --no-cache add bash

RUN rm /bin/sh && ln -s /bin/bash /bin/sh

RUN apk --no-cache add icu-dev nano g++ libxml2-dev php8-tokenizer php8-dom php8-xml php8-fileinfo mysql-client php-xmlwriter libzip-dev unzip freetype-dev libpng-dev jpeg-dev icu-dev jpeg-dev libjpeg libjpeg-turbo-dev freetype freetype-dev jpeg-dev libjpeg-turbo-dev libzip-dev libpng zip libc6-compat libbsd libstdc++6 libstdc++ ttf-dejavu ttf-droid ttf-freefont ttf-liberation autoconf php8-pecl-imagick imagemagick-dev wkhtmltopdf pcre-dev git openssh less gcompat $PHPIZE_DEPS
RUN pecl install imagick
RUN docker-php-ext-configure intl
RUN docker-php-ext-configure pcntl --enable-pcntl
RUN docker-php-ext-configure gd --with-jpeg --with-freetype
RUN docker-php-ext-enable imagick
RUN docker-php-ext-install -j$(nproc) pcntl gd intl mysqli pdo pdo_mysql dom zip bcmath

RUN echo 'memory_limit = -1' >> /usr/local/etc/php-fpm.d/docker-php-memlimit.ini;
RUN echo 'memory_limit = -1' >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini;

RUN pecl install redis && docker-php-ext-enable redis.so

#node
RUN apk add curl
ARG NODE_VERSION=16.18.1
RUN curl https://nodejs.org/dist/v$NODE_VERSION/node-v$NODE_VERSION-linux-x64.tar.gz | tar -xz -C /usr/local --strip-components 1

#composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

WORKDIR /var/www/app

EXPOSE 9000
