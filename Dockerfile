FROM php:8.3-apache

WORKDIR /app

# Install dependencies
RUN apt-get update && apt-get install -y \
    git curl zip unzip && \
    docker-php-ext-install pdo pdo_mysql && \
    a2enmod rewrite && \
    rm -rf /var/lib/apt/lists/*

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . .

# Install PHP packages
RUN composer install --no-dev --optimize-autoloader

# Permissions
RUN chown -R www-data:www-data /app/storage /app/bootstrap/cache && \
    chmod -R 775 /app/storage /app/bootstrap/cache

# Apache config
RUN cat > /etc/apache2/sites-available/000-default.conf <<'EOF'
<VirtualHost *:80>
    ServerName localhost
    DocumentRoot /app/public
    
    <Directory /app/public>
        Options -Indexes +FollowSymLinks
        AllowOverride All
        Require all granted
        
        <IfModule mod_rewrite.c>
            RewriteEngine On
            RewriteCond %{REQUEST_FILENAME} !-f
            RewriteCond %{REQUEST_FILENAME} !-d
            RewriteRule ^(.*)$ /index.php [L]
        </IfModule>
    </Directory>
</VirtualHost>
EOF

EXPOSE 80

# Run migrations and start Apache
CMD php artisan migrate --force || true; apache2-foreground
