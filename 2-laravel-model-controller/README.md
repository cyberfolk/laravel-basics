# Laravel Model Controller

La prima vera interazione con il database utilizzando l’ORM di Laravel.

- Creare un nuovo progetto Laravel 9 `composer create-project laravel/laravel:^9.2 laravel-model-controller`
- Tramite phpMyAdmin Creare un nuovo database `laravel_model_controller`
- Importate nel database la tabella [movies](./movies_db.sql) in allegato con giá qualche film dentro
- Inserire le credenziali per il database nel file `.env`
- Creare un model **Movie** `php artisan make:model Movie`
- Creare un **controller** che gestirà la rotta **/** `php artisan make:controller Guest/PageController`
- All’interno della funzione `index()` del controller, recuperare tutti i film dal database e passarli alla view, che quindi li visualizzerà a schermo, tramite delle card.
- Stilare il layout nei dettagli con Sass
