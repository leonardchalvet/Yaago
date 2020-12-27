FROM php:7

RUN apt-get update && apt-get install -q -y msmtp mailutils && rm -rf /var/lib/apt/lists/*

# config sendmail
COPY msmtprc /etc/msmtprc
RUN chmod 600 /etc/msmtprc
RUN chown www-data:www-data /etc/msmtprc
# Set up php sendmail config
RUN echo "sendmail_path=/usr/bin/msmtp -t" >> /usr/local/etc/php/conf.d/php-sendmail.ini

COPY app /usr/src/yaago-website/app
COPY public /usr/src/yaago-website/public
COPY Front /usr/src/yaago-website/Front
COPY vendor /usr/src/yaago-website/vendor
COPY config.php /usr/src/yaago-website
COPY composer.json /usr/src/yaago-website
COPY composer.lock /usr/src/yaago-website
#COPY email.ini /usr/local/etc/php/conf.d
#COPY serve.sh /usr/src/yaago-website

WORKDIR /usr/src/yaago-website/public
ENTRYPOINT [ "php", "-S", "0.0.0.0:8000" ]