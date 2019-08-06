FROM php:7.3-apache

#Permitimos guardar los logs
#RUN unlink /var/log/apache2/error.log && unlink /var/log/apache2/access.log && touch /var/log/apache2/error.log && touch /var/log/apache2/access.log && chown www-data:www-data /var/log/apache2/error.log && chown www-data:www-data /var/log/apache2/access.log
#Instalamos herramientas necesarias para ciertos ataques
RUN apt-get update && apt-get install -y netcat nano

#Montamos la pagina de login
ADD --chown=www-data:www-data ./codigo /var/www/html/
