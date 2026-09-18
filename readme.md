# Bloom Recipes

Bloom Recipes is a full stack recipe web application originally developed in 2023 as an academic project.
The application includes a recipe website, a Laravel REST API, user authentication, recipe filtering, search functionality, saved recipes, likes, and a MariaDB database.
This repository preserves the original version of the project as it was built in 2023, with only minor adjustments required to run it again in a modern local environment.

## Technologies

### Frontend
- HTML
- SCSS
- JavaScript
- Vue 3 (CDN-based implementation)
- Axios

### Backend
- PHP
- Laravel 10
- Laravel Sanctum (token-based authentication)
- REST API

### Database
- MariaDB

## Features

- Browse all recipes
- View recipe details
- Search recipes by name
- Filter recipes by category, difficulty, and occasion
- View trending recipes
- User registration and login
- Save favorite recipes
- Like and unlike recipes

## Architecture

Bloom Recipes follows a separated frontend-backend structure.
The frontend communicates with the Laravel REST API through Axios requests. 
The API handles application logic, authentication, recipe data, and user interactions, while MariaDB stores the project data.

## Original Project

Bloom Recipes was originally developed in 2023 while I was learning full stack web development and working with Vue and Laravel.
This version represents the way I approached application architecture, API integration, and frontend development at that stage of my learning process.

## Running the Project

### Database

This project uses **MariaDB** as its relational database management system.
The original database can be restored locally using **Laragon**:

1. Start Laragon.
2. Open the database manager included with Laragon.
3. Import and execute the provided `.sql` file.

### Backend

    Navigate to the Laravel project:
        ```bash
        cd proyectobloom

    Install dependencies:
        composer install

    Create the environment file:
        cp .env.example .env

    Configure the database connection in .env.
        Example:
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=proyectobloom
        DB_USERNAME=root
        DB_PASSWORD=

    Generate the application key:
        php artisan key:generate

    Create the storage link:
        php artisan storage:link

    Start the Laravel server:
        php artisan serve

    The API will run by default at:
        http://127.0.0.1:8000
    Example API endpoint:
        http://127.0.0.1:8000/api/recipes/all

### Frontend

Open the frontend project called "bloomrecipes" and run the dist/index.html file using a local web server such as Live Server.
The frontend communicates with the Laravel API using Axios.

## Notes

This repository preserves the original 2023 implementation. Some architectural decisions and development practices reflect my experience and knowledge at that time.
A modernized version of this project is being developed as [Bloom Recipes Remastered](https://github.com/MoniAF/BloomRecipesRemastered), applying the skills and practices I have acquired since the original version.

## Remastered Version

🌸 [**Bloom Recipes Remastered — 2026**](https://github.com/MoniAF/BloomRecipesRemastered)
