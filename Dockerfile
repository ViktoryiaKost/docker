FROM php:8-fpm

# Установить зависимости
# Устанавливаем зависимости
# Устанавливаем зависимости
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    git \
    && docker-php-ext-install zip

# Устанавливаем Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Копируем файлы проекта
WORKDIR /var/www/html
COPY . .

# Устанавливаем зависимости через Composer
RUN composer install

# Устанавливаем права для папки src
RUN chown -R www-data:www-data /var/www/html/src
RUN chmod -R 777 .
