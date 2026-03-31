FROM php:8.3-apache

# Install system packages
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libpq-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    && docker-php-ext-install -j$(nproc) pdo pdo_mysql \
    && a2enmod rewrite \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

# Copy application files
COPY . /app

# Set permissions
RUN chown -R www-data:www-data /app && \
    chmod -R 755 /app && \
    chmod -R 777 /app/storage /app/bootstrap/cache

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Configure Apache
RUN echo '<Directory /app/public>' > /etc/apache2/sites-available/000-default.conf && \
    echo '  Options Indexes FollowSymLinks' >> /etc/apache2/sites-available/000-default.conf && \
    echo '  AllowOverride All' >> /etc/apache2/sites-available/000-default.conf && \
    echo '  Require all granted' >> /etc/apache2/sites-available/000-default.conf && \
    echo '</Directory>' >> /etc/apache2/sites-available/000-default.conf && \
    echo '' >> /etc/apache2/sites-available/000-default.conf && \
    echo 'DocumentRoot /app/public' >> /etc/apache2/sites-available/000-default.conf

EXPOSE 80

CMD ["apache2-foreground"]
