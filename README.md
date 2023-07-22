# Laravel Model Controller

La prima vera interazione con il database utilizzando l’ORM di Laravel.

1. Creare un nuovo progetto Laravel 9 `composer create-project laravel/laravel:^9.2 laravel-model-controller`
2. Tramite phpMyAdmin Creare un nuovo database `laravel_model_controller`
3. Importate nel database la tabella `movies` in allegato con giá qualche film dentro
4. Inserire le credenziali per il database nel file `.env`
5. Creare un model **Movie** `php artisan make:model Movie`
6. Creare un **controller** che gestirà la rotta **/** `php artisan make:controller Guest/PageController`
7. All’interno della funzione `index()` del controller, recuperare tutti i film dal database e passarli alla view, che quindi li visualizzerà a schermo, tramite delle card.

## BONUS:

Stilare il layout nei dettagli con Sass
