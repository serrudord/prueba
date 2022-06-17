FROM php:7.3.28-fpm-alpine3.13

LABEL maintainer="Franco Serrudo <serrudord@gmail.com>" \
    url="https://hub.docker.com/r/rserrudo/php/" \
    source="https://github.com/rserrudo/docker-php"

# Extensión GD
  RUN apk add --no-cache \
  freetype \
  libpng \
  libjpeg-turbo \
  freetype-dev \
  libpng-dev \
  libjpeg-turbo-dev \
  && docker-php-ext-configure gd \
    --with-gd \
    --with-freetype-dir=/usr/include/ \
    --with-png-dir=/usr/include/ \
    --with-jpeg-dir=/usr/include/ && \
  NPROC=$(grep -c ^processor /proc/cpuinfo 2>/dev/null || 1) && \
  docker-php-ext-install -j${NPROC} gd && \
  apk del --no-cache freetype-dev libpng-dev libjpeg-turbo-dev

# Extensión MYSQLI
  RUN docker-php-ext-install mysqli && \
  docker-php-ext-enable mysqli

# Extensión PDO
  RUN docker-php-ext-install pdo pdo_mysql && \
  docker-php-ext-enable pdo_mysql

# Limpieza
  RUN rm -rf /tmp/*