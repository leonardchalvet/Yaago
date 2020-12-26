FROM php:7

RUN apt-get update && apt-get install -q -y ssmtp mailutils

# root is the person who gets all mail for userids < 1000
RUN echo "root=contact@infine.io" >> /etc/ssmtp/ssmtp.conf

# Here is the gmail configuration (or change it to your private smtp server)
RUN echo "mailhub=smtp.postmarkapp.com:587" >> /etc/ssmtp/ssmtp.conf
RUN echo "AuthUser=7f834d0b-5979-4e61-9dea-36606ada7cb2" >> /etc/ssmtp/ssmtp.conf
RUN echo "AuthPass=7f834d0b-5979-4e61-9dea-36606ada7cb2" >> /etc/ssmtp/ssmtp.conf

RUN echo "UseTLS=YES" >> /etc/ssmtp/ssmtp.conf
RUN echo "UseSTARTTLS=YES" >> /etc/ssmtp/ssmtp.conf

# Set up php sendmail config
RUN echo "sendmail_path=sendmail -i -t" >> /usr/local/etc/php/conf.d/php-sendmail.ini
RUN rm -rf /var/lib/apt/lists/*

COPY app /usr/src/yaago-website/app
COPY public /usr/src/yaago-website/public
COPY Front /usr/src/yaago-website/Front
COPY vendor /usr/src/yaago-website/vendor
COPY config.php /usr/src/yaago-website
COPY composer.json /usr/src/yaago-website
COPY composer.lock /usr/src/yaago-website
#COPY email.ini /usr/local/etc/php/conf.d
COPY serve.sh /usr/src/yaago-website

WORKDIR /usr/src/yaago-website
ENTRYPOINT [ "./serve.sh" ]