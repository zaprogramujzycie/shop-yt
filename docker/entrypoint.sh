#!/bin/bash

npm install -g n
n 14.15.0
npm install
npm run prod

composer install --no-interaction --no-progress

php artisan key:generate
php artisan migrate:fresh --seed
php artisan cache:clear
php artisan config:clear
php artisan route:clear
#php artisan serve --port=$PORT --host=0.0.0.0

cd public && ln -sf ../storage/app/public/ storage

chown -R www-data:www-data /var/www/html

exec docker-php-entrypoint apache2-foreground
