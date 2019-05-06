#!/bin/bash
chown -R www-data:www-data /var/www/html
exec docker-php-entrypoint apache2-foreground
