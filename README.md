# laravel-demo-dockerized
A simple laravel app which we will dockerize and deploy to kubernetes -> https://github.com/bohemian-coder/dockerize-laravel-demo

To run this you need : Docker-Desktop 

Base commands :
``` docker-compose up --build -d ```

In ${APP_NAME}_php run:
 ``` php artisan migrate ```
 ``` php artisan db:seed```

All containers are in the same network, and should be able to communicate with each other using container names.

Docker images: 
``` docker pull maybellemo/demoapp-php:latest ```
``` docker pull maybellemo/mysql:latest```
``` docker pull maybellemo/httpd:latest ```