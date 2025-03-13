<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# ApiDemo - Laravel API

The ApiDCSGames project was developed as part of the qualification rounds for the DCS IT GAMES, a competition between BTS SIO high schools organized by the company DCS Easyware. This API was designed as the backend for an Angular project and was developed to send data in JSON format.

## Features

- **Endpoints:** The API provides endpoints to interact with various resources.

## Installation and Configuration

1. **Clone the project:**
   ```bash
   git clone https://github.com/nbena69/ApiDemo.git
   ```

2. **Install dependencies:**
   ```bash
   cd ApiDemo
   composer install
   ```

3. **Configure the database:**
   - Create a copy of the `.env.example` file and rename it to `.env`.
   - Configure the database settings in the `.env` file.

4. **Run migrations and seed the database:**
   ```bash
   php artisan migrate --seed
   ```

5. **Start the development server:**
   ```bash
   php artisan serve
   ```

