# Use a standard PHP image with Apache
FROM php:8.2-apache

# Install the MySQL extension so your code can talk to TiDB
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copy all your project files into the server
COPY . /var/www/html/

# Make sure the server can read the files
RUN chown -R www-data:www-data /var/www/html

# Tell Render to use port 80
EXPOSE 80