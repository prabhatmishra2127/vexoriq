#!/bin/sh
set -e

# If .env doesn't exist, create it
if [ ! -f /app/.env ]; then
    if [ -f /app/.env.example ]; then
        cp /app/.env.example /app/.env
    else
        touch /app/.env
    fi
fi

# Ensure database directory and sqlite file exist
mkdir -p /app/database
touch /app/database/database.sqlite
chmod -R 777 /app/database

# Ensure storage directories exist with write permissions
mkdir -p /app/storage/framework/cache/data
mkdir -p /app/storage/framework/sessions
mkdir -p /app/storage/framework/views
mkdir -p /app/storage/logs
chmod -R 777 /app/storage /app/bootstrap/cache

# If APP_KEY is empty, generate one
if [ -z "$APP_KEY" ]; then
    php artisan key:generate --force || true
fi

# Run database migrations
php artisan migrate --force || true

# Clear caches for fresh startup
php artisan config:clear || true
php artisan route:clear || true
php artisan view:clear || true

echo "Starting Trixoiq on port ${PORT:-10000}..."
exec php artisan serve --host=0.0.0.0 --port="${PORT:-10000}"
