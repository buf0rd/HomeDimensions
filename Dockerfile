FROM php:8.3-apache

RUN a2enmod rewrite

COPY index.php save.php view.php /var/www/html/

RUN touch /var/www/html/data.json \
 && chown -R www-data:www-data /var/www/html

EXPOSE 80
