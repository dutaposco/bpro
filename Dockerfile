FROM php:8.3-fpm
WORKDIR /app
RUN apt-get update && apt-get install -y git curl zip unzip && docker-php-ext-install pdo pdo_mysql && rm -rf /var/lib/apt/lists/*
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY . .
RUN mkdir -p storage/logs bootstrap/cache && chmod -R 777 storage bootstrap/cache
RUN composer install --no-dev --optimize-autoloader
RUN chown -R www-data:www-data /app
EXPOSE 8000
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
