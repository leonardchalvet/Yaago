FROM php

COPY app /usr/src/yaago-website/app
COPY public /usr/src/yaago-website/public
COPY Front /usr/src/yaago-website/Front
COPY config.php /usr/src/yaago-website

WORKDIR /usr/src/yaago-website/public
CMD [ "php", "-S", "0.0.0.0:8000" ]