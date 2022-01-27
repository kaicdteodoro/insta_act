FROM node:16.13
WORKDIR "/app"

RUN apt-get update; \
    apt-get -y --no-install-recommends install \
        git \
        php8.1-mysql \
        php8.1-redis; \
    apt-get clean; \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
