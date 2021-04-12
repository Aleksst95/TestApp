FROM php:7.4-fpm-alpine

# see https://hub.docker.com/r/mlocati/php-extension-installer
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod uga+x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions yaml pdo_mysql && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Add a non-root user to prevent files being created with root permissions on host machine.
ARG PUID=1000
ENV PUID ${PUID}
ARG PGID=1000
ENV PGID ${PGID}
ARG USER=DOCKER_USER

RUN addgroup -g ${PGID} ${USER} && \
        adduser -u ${PUID} -G ${USER} -s /bin/sh -D ${USER}
