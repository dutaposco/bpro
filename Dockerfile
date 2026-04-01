FROM php:8.3-fpm
WORKDIR /app
# Install PHP extensions and Node.js
RUN apt-get update && apt-get install -y git curl zip unzip \
    && docker-php-ext-install pdo pdo_mysql \
    && curl -sL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY . .

RUN cp .env.production .env
RUN mkdir -p storage/logs bootstrap/cache && chmod -R 777 storage bootstrap/cache

# Install dependencies and build assets
RUN composer install --no-dev --optimize-autoloader
RUN npm install && npm run build

RUN chown -R www-data:www-data /app
EXPOSE 8000
CMD ["sh", "-c", "php artisan migrate --force && php artisan db:seed --force && php -S 0.0.0.0:${PORT:-8000} -t public"]
