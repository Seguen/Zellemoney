FROM php:8.2-apache

# Installer Git et Composer dans l'image
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Active les extensions nécessaires
RUN docker-php-ext-install mysqli

# Active mod_rewrite (utile pour certains frameworks ou routeurs)
RUN a2enmod rewrite

# Copier les fichiers du projet
COPY . /var/www/html/

# Se placer dans le dossier et installer les dépendances via composer (dans Docker)
WORKDIR /var/www/html
RUN composer install

# Bonnes permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
