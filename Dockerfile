FROM php:8.1-apache

CMD service apache2 start && php /var/www/html/rate-script.php && tail -f /dev/null
