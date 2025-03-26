#!/bin/bash

# Instalar Composer
curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instalar las dependencias de Composer
composer install --no-dev --optimize-autoloader
