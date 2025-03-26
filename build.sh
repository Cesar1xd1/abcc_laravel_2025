#!/bin/bash

# Instalar PHP (si no está instalado)
if ! command -v php &> /dev/null
then
    echo "PHP no está instalado. Instalando..."
    apt-get update && apt-get install -y php php-cli php-fpm php-mbstring php-xml php-mysql php-curl
fi

# Instalar Composer (si no está instalado)
if ! command -v composer &> /dev/null
then
    echo "Composer no está instalado. Instalando..."
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
fi

# Instalar dependencias de Composer
composer install --no-dev --optimize-autoloader
