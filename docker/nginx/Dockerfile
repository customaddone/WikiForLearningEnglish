FROM nginx:1.15-alpine

COPY public /var/www/html/public
COPY docker/nginx/default.conf /etc/nginx/conf.d/default.conf.template

ENV PHP_HOST=127.0.0.1

EXPOSE 80

CMD /bin/sh -c 'sed "s/\${PHP_HOST}/${PHP_HOST}/" /etc/nginx/conf.d/default.conf.template > /etc/nginx/conf.d/default.conf && nginx -g "daemon off;"'

RUN touch ./index.html && echo "<h1>Hello nginx.</h1>" > ./index.html

RUN ls var/www/html
