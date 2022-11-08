FROM php:8-cli

WORKDIR /usr/src/app

RUN apt update && \
    apt install vim git -y

# INSTALL COMPOSER
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer