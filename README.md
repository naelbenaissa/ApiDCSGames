<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# ApiDemo - Laravel API

Le projet ApiDCSGames a été réalisé dans le cadre des épreuves de qualification de DCS IT GAMES, un concours entre les lycées du BTS SIO organisé par l'entreprise DCS Easyware. Cette API a été conçue comme le backend d'un projet Angular, et elle a été développée pour envoyer des données au format JSON.

## Fonctionnalités

- **Endpoints :** L'API offre des endpoints pour interagir avec différentes ressources.

## Installation et Configuration

1. **Cloner le projet :**
   ```bash
   git clone https://github.com/nbena69/ApiDemo.git

2. **Installer les dépendances :**
   ```bash
   cd ApiDemo
   composer install

3. **Configurer la base de données :**
- Créez une copie du fichier .env.example et renommez-le en .env.
- Configurez les paramètres de la base de données dans le fichier .env.

4. **Effectuer les migrations et les seeds :**
   ```bash
   php artisan migrate --seed

5. **Lancer le serveur de développement :**
   ```bash
    php artisan serve
