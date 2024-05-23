# Usa la imagen base oficial de PHP con Apache
FROM php:8.0.30-apache

# Instala las dependencias necesarias
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    && docker-php-ext-install pdo_mysql

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Configura el directorio de trabajo
WORKDIR /var/www/html

# Copia el contenido del proyecto al contenedor
COPY . .

# Ejecuta composer install para instalar dependencias
RUN composer install

# Exponer el puerto 80
EXPOSE 80
