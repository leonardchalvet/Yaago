FROM php

RUN mkdir -p /usr/src/yaago-website
COPY app /usr/src/yaago-website
COPY public /usr/src/yaago-website
COPY Front /usr/src/yaago-website
COPY config.php /usr/src/yaago-website

WORKDIR /usr/src/yaago-website/public
CMD [ "php", "-S", "0.0.0.0:8000" ]