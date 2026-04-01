FROM php:8.3-apache
WORKDIR /app
RUN apt-get update && apt-get install -y git curl zip unzip && docker-php-ext-install pdo pdo_mysql && a2enmod rewrite && rm -rf /var/lib/apt/lists/*
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY . .
RUN composer install --no-dev --optimize-autoloader
RUN chown -R www-data:www-data storage bootstrap/cache && chmod -R 775 storage bootstrap/cache
RUN sed -i 's|/var/www/html|/app/public|g' /etc/apache2/apache2.conf /etc/apache2/sites-available/000-default.conf
EXPOSE 80
CMD ["apache2-foreground"]
