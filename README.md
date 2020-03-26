## BoilerPlate laravel with stripe

This is a boilerplate laravel project with stripe.

More configurations are needed to be added and also some specs. This is built entirely on docker. Enjoy :)

## Setting up project.

- `cp .env.example .env` However an `env` file already exists. Just an example.
- `docker-compose up -d`
- `docker-compose exec app php artisan key:generate`
- `docker-compose exec app php artisan config:cache`