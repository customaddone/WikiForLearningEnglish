FROM nginx:1.15-alpine

COPY public /var/www/html/public
COPY docker/nginx/default.conf /etc/nginx/conf.d/default.conf

RUN ls /var/www/html/public

EXPOSE 80

CMD /bin/sh -c 'sed "s/\${PHP_HOST}/${PHP_HOST}/" /etc/nginx/conf.d/default.conf > /etc/nginx/conf.d/default.conf && nginx -g "daemon off;"'
