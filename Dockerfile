FROM php:8.0-apache

RUN apt-get update -y && apt-get install -y \
    nodejs \
    npm \
    curl \
    zip \
    unzip \
  && docker-php-ext-install pdo pdo_mysql

WORKDIR /var/www/html
COPY . .
COPY ./docker/vhost.conf /etc/apache2/sites-available/000-default.conf
COPY --from=composer:2.1.14 /usr/bin/composer /usr/bin/composer

RUN a2enmod rewrite

ENV PORT=80
ENTRYPOINT ["docker/entrypoint.sh"]
