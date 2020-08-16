FROM php:7.4.5-fpm


RUN apt-get update && apt-get install -y libpq-dev git zip unzip && apt-get clean 


RUN docker-php-ext-install pdo pdo_mysql


RUN apt-get install curl && \
	curl -s https://getcomposer.org/installer | php && \
	mv composer.phar /usr/local/bin/composer

RUN apt-get clean -y



EXPOSE 9000

CMD ["php-fpm"]

