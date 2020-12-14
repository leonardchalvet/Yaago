FROM php

COPY . /usr/src
WORKDIR /usr/src/public
CMD [ "php", "-S", "0.0.0.0:8000" ]