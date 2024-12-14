#!/usr/bin/env bash
echo "Running composer"
composer install --no-dev --working-dir=/var/www/html

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Running migrations..."
php artisan migrate --force

# Start PHP-FPM
echo "Starting PHP-FPM..."
php-fpm -D

# Give it a moment to start
sleep 2

echo "Setup completed"
