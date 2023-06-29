FROM php:8.1-apache

CMD mkdir src/assets && touch src/assets/rate.txt && service apache2 start && php /var/www/html/rate-script.php && tail -f /dev/null
