FROM php:8.2-fpm

# Install PHP and system dependencies
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpng-dev libonig-dev libxml2-dev libzip-dev \
    libpq-dev gnupg2 ca-certificates lsb-release \
    && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl bcmath gd

# Install Node.js (for Vite)
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy project files
COPY . .

# Install JS dependencies and build frontend (Vite)
RUN npm install && npm run build

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Copy .env.example to .env if it doesn't exist
RUN if [ ! -f .env ]; then cp .env.example .env; fi

# Generate application key only if it's not set
RUN if ! grep -q "^APP_KEY=base64" .env; then php artisan key:generate; fi

# Expose port 8000 and start the Laravel server
EXPOSE 8000
CMD php artisan serve --host=0.0.0.0 --port=8000
