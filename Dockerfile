FROM php:8.2-fpm

ARG user
ARG uid

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    supervisor \
    nginx \
    build-essential \
    openssl \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libzip-dev \
    librdkafka-dev \
    libpq-dev \
    openssh-server \
    sqlite3 \
    nano \
    cron \
    libicu-dev \
    libmariadb-dev \
    unzip \
    zip \
    zlib1g-dev \
    libjpeg-dev

# Install Node.js
RUN curl -fsSL https://deb.nodesource.com/setup_current.x | bash - && \
    apt-get install -y nodejs

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Kafka
RUN git clone https://github.com/arnaud-lb/php-rdkafka.git && \
    cd php-rdkafka && \
    phpize && \
    ./configure && \
    make all -j$(nproc) && \
    make install && \
    docker-php-ext-enable rdkafka && \
    cd .. && \
    rm -rf /php-rdkafka

# Install PHP Extensions
RUN docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg && \
    docker-php-ext-install zip mbstring exif pcntl bcmath gd intl gettext pdo pdo_mysql sockets pdo_pgsql opcache

# Install Redis and enable it
RUN pecl install redis && docker-php-ext-enable redis

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

COPY . .
