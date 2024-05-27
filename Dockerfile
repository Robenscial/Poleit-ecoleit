FROM php:8.3.2

WORKDIR /var/www/html
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN pecl install redis && docker-php-ext-enable redis
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN apt-get update && apt install -y libzip-dev unzip && docker-php-ext-install zip
RUN mv composer.phar /usr/local/bin/composer
ADD https://raw.githubusercontent.com/vishnubob/wait-for-it/master/wait-for-it.sh /usr/bin/wait-for-it
RUN chmod +x /usr/bin/wait-for-it
COPY ./php.ini /usr/local/etc/php/php.ini
COPY . .
RUN composer install

CMD ["wait-for-it", "database:3306", "--", "php", "-S", "0.0.0.0:80", "-t", "/var/www/html/public" ]
