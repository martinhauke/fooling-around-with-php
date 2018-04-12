FROM php:7-fpm

LABEL version="0.1.0" \
      description="Docker Image for php" \
      maintainer="hauke@september-werbeagentur.de"

RUN apt-get update && apt-get install -y --no-install-recommends \
    wget
COPY ./composer-install.sh /var/www/html/composer-install.sh
RUN chmod +x /var/www/html/composer-install.sh
RUN /var/www/html/composer-install.sh

VOLUME /var/www/html
