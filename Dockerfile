FROM php:8.0.2-fpm-buster

RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libzip-dev \
    libxml2-dev \
    zip \
    unzip \
    nano

# Install PHP extensions
#RUN docker-php-ext-install bcmath ctype fileinfo json mbstring openssl pdo_mysql tokenizer xml exif pcntl gd  
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd
RUN docker-php-ext-install zip
#add non-root user
#RUN useradd -u 8877 iyan

# Set working directory
WORKDIR /var/www/html

#USER iyan
