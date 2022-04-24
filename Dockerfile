FROM php:8.0.2-fpm-buster

RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libonig-dev \
    libzip-dev \
    libxml2-dev \
    zip \
    unzip \
    nano \
    libxrender-dev \
    libfontconfig1 \
    fontconfig \
    libfontconfig1-dev

# Install PHP extensions
#RUN docker-php-ext-install bcmath ctype fileinfo json mbstring openssl pdo_mysql tokenizer xml exif pcntl gd  
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install -j$(nproc) gd
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath
RUN docker-php-ext-install zip
#add non-root user
#RUN useradd -u 8877 iyan

# Set working directory
WORKDIR /var/www/html

#USER iyan
