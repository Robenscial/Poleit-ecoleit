FROM php:8.3.2

WORKDIR /var/www/html
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN pecl install redis && docker-php-ext-enable redis
ADD https://raw.githubusercontent.com/vishnubob/wait-for-it/master/wait-for-it.sh /usr/bin/wait-for-it
RUN chmod +x /usr/bin/wait-for-it
COPY ./php.ini /usr/local/etc/php/php.ini
RUN rm  -r /var/www/html
RUN apt intall git -y
RUN git clone https://github.com/Robenscial/Poleit-ecoleit /var/www/html
#COPY . .

CMD ["wait-for-it", "database:3306", "--", "php", "-S", "0.0.0.0:80", "-t", "/var/www/html/public" ]
