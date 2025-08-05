# Utilise l'image officielle PHP avec Apache
FROM php:8.2-apache

# Active les extensions nécessaires (si tu utilises PHPMailer avec SMTP, SSL, etc.)
RUN docker-php-ext-install mysqli

# Active mod_rewrite si besoin (souvent utile)
RUN a2enmod rewrite

# Copie tous les fichiers de ton projet dans le dossier web d'Apache
COPY . /var/www/html/

# Donne les bons droits
RUN chown -R www-data:www-data /var/www/html

# Expose le port 80
EXPOSE 80
