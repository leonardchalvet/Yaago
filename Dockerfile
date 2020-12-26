FROM php:7

COPY app /usr/src/yaago-website/app
COPY public /usr/src/yaago-website/public
COPY Front /usr/src/yaago-website/Front
COPY vendor /usr/src/yaago-website/vendor
COPY config.php /usr/src/yaago-website
COPY composer.json /usr/src/yaago-website
COPY composer.lock /usr/src/yaago-website
COPY email.ini /usr/local/etc/php/conf.d
COPY serve.sh /usr/src/yaago-website

WORKDIR /usr/src/yaago-website
ENTRYPOINT [ "./serve.sh" ]