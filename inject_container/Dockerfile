FROM php:7.0.33-apache
#Copiamos los archivos vulnerables
ADD --chown=www-data:www-data ./codigo/code-injection /var/www/html/
ADD --chown=www-data:www-data ./.ssh/ /var/www/.ssh/
#Permitimos guardar los logs para poder utilizarlos en ataques
RUN unlink /var/log/apache2/error.log && unlink /var/log/apache2/access.log && touch /var/log/apache2/error.log && touch /var/log/apache2/access.log
RUN chown www-data:www-data /var/log/apache2/error.log && chown www-data:www-data /var/log/apache2/access.log
#Instalamos herramientas necesarias para ciertos ataques
RUN apt-get update && apt-get install -y iputils-ping netcat nano openssh-client openssh-server rsync
RUN sed -i 's/DirectoryIndex\ disabled/DirectoryIndex\ enabled/g' /etc/apache2/conf-available/docker-php.conf && \
docker-php-ext-install mysqli && docker-php-ext-enable mysqli &&\
sed -i 's/www-data:x:33:33:www-data:\/var\/www:\/usr\/sbin\/nologin/www-data:x:33:33:www-data:\/var\/www:\/bin\/sh/g' /etc/passwd && \
sed -i 's/#\ \ \ StrictHostKeyChecking\ ask/StrictHostKeyChecking\ no/g' /etc/ssh/ssh_config
RUN sed -i 's/allow_url_include\ \=\ Off/allow_url_include\ \=\ On/g' /usr/local/etc/php/php.ini-development && mv /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini
#Tenemos que lograr levantar el ssh sin que se apague al terminar o sin que caiga el apache
#CMD /etc/init.d/ssh start && tail -f /dev/null
