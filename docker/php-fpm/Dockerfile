FROM phpdockerio/php:8.2-fpm

ENV PHP_IDE_CONFIG serverName=php_backend

RUN apt-get update && apt-get -y upgrade

RUN apt-get update \
    && apt-get -y --no-install-recommends install \
        php8.2-mysql php8.2-redis php8.2-gmp php8.2-intl \
        wget git unzip mc less nano \
        redis-tools \
        cron \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

ARG INSTALL_XDEBUG=false
RUN if [ ${INSTALL_XDEBUG} = true ]; then \
    # Install the xdebug extension
    apt-get update \
        && apt-get -y --no-install-recommends install php8.2-xdebug \
        && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/* \
;fi

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer --version

# Install Symfony
RUN echo 'deb [trusted=yes] https://repo.symfony.com/apt/ /' | tee /etc/apt/sources.list.d/symfony-cli.list
RUN apt-get update && apt-get install symfony-cli

RUN ["chmod", "g+w", "/var/lib/php/sessions"]

WORKDIR "/var/www/php_backend"