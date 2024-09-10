# Utiliser l'image officielle PHP avec Apache
FROM php:8.1-apache

# Copier le contenu de ton projet dans le dossier /var/www/html/ du conteneur Docker
COPY . /var/www/html/

# Installer les dépendances si nécessaire (exemple : composer)
# RUN apt-get update && apt-get install -y libzip-dev && docker-php-ext-install zip
# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
# RUN composer install

# Exposer le port 80
EXPOSE 80
