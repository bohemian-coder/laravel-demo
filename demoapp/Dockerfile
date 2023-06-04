FROM php:8.1-zts-alpine3.16

# Install system dependencies
RUN apk add --no-cache nodejs yarn \
    apache2 apache2-ssl mysql-client \
    php8-apache2 php8-mysqli php8-pdo php8-pdo_mysql php8-json php8-openssl \
    php8-tokenizer php8-xml php8-mbstring php8-dom php8-fileinfo php8-zip php8-phar \
    && docker-php-ext-install pdo_mysql

# Install Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN php -r "unlink('composer-setup.php');"


# Configure Apache
# COPY docker/httpd/site.conf /etc/apache2/conf.d/laravel.conf
# RUN ln -s /etc/apache2/conf.d/laravel.conf /etc/apache2/conf.d/default.conf

# Setup Laravel migrations & seed data
# RUN php artisan migrate
# RUN php artisan db:seed

# Set document root
WORKDIR /var/www/html

# Expose ports
EXPOSE 80

# Start Apache
CMD ["/usr/sbin/httpd", "-D", "FOREGROUND"]
