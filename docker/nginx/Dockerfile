FROM nginx:alpine

RUN apk update && apk add bash && rm -rf /var/cache/apk/*

WORKDIR "/var/www/php_backend"

EXPOSE 80
EXPOSE 443