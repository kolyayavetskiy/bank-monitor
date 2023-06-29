FROM php:8.1-apache

CMD touch src/assets/rate.txt

CMD service apache2 start && php /var/www/html/rate-script.php && tail -f /dev/null
