echo "$(hostname -i)\t$(hostname) $(hostname).localhost" >> /etc/hosts
service sendmail start
cd ./public && php -S 0.0.0.0:8000