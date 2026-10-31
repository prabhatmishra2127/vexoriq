FROM php:8.2-cli

# Install system dependencies, SQLite support, and Node.js
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libzip-dev \
    zip \
    sqlite3 \
    libsqlite3-dev \
    nodejs \
    npm \
    && docker-php-ext-install zip pdo_sqlite \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

# Copy application files
COPY . .

# Install Composer PHP dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Install NPM dependencies and build Vite frontend assets
RUN npm ci || npm install
RUN npm run build

# Copy and prepare startup entrypoint
COPY entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

EXPOSE 10000

ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
