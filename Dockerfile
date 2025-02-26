FROM php:8.2-fpm

# Instalar dependências do sistema
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libpq-dev \
    libzip-dev \
    libpng-dev \
    # Adicionar Node.js e npm
    nodejs \
    npm \
    && docker-php-ext-install pdo pdo_pgsql zip gd

# Instalar e habilitar a extensão Redis
RUN pecl install redis && docker-php-ext-enable redis

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Definir diretório de trabalho
WORKDIR /var/www

# Copiar todo o código do Laravel antes da instalação das dependências
COPY . /var/www

# Instalar dependências do Laravel
RUN composer install --no-dev --optimize-autoloader

# Expor porta do PHP-FPM
EXPOSE 9000

CMD ["php-fpm"]
