# laravel-docker-kubernetes

Multi-tier sample Laravel application, containerized and deployed to kubernetes.

To run this you need : 
- PHP
- MySQL
- Apache
- Composer

Base commands :

``` composer install ```
 ``` php artisan migrate ```
 ``` php artisan db:seed```

Each branch represents a different stage of the process;
1. main : Sample laravel application setup
2. dockerized-version: Sample application containerized
3. kubernetes-setup: Containerzied application deployed to kubernetes

**This is setup to run on MAC M1/M2. Setup scripts for other operating systems may be different.**
