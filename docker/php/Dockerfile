FROM php:7.4-cli
WORKDIR /src
COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN apt-get update \
    && apt-get install -y libicu-dev libonig-dev git zip
RUN docker-php-ext-install intl