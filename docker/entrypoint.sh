#!/bin/bash

echo "Configurando Git..."
git config --global --add safe.directory /var/www/html

echo "Aguardando MySQL ficar pronto..."

until php -r "
try {
    new PDO(
        'mysql:host=' . getenv('DB_HOST') . ';port=' . getenv('DB_PORT') . ';dbname=' . getenv('DB_DATABASE'),
        getenv('DB_USERNAME'),
        getenv('DB_PASSWORD')
    );
    exit(0);
} catch (Exception \$e) {
    exit(1);
}
"; do
    echo "MySQL ainda não está pronto..."
    sleep 3
done

echo "MySQL conectado."

echo "Instalando dependências..."
composer install --no-interaction --prefer-dist --optimize-autoloader

echo "Ajustando permissões..."
chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

echo "Limpando cache..."
php artisan config:clear
php artisan view:clear
php artisan route:clear
php artisan config:cache

echo "Rodando migrations..."
php artisan migrate --force

echo "Iniciando Apache..."
exec apache2-foreground