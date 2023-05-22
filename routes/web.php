<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data = [
        "title" => "Home",
        "author" => "cyberfolk",
        "imagePath" => "https://picsum.photos/100/100"
    ];
    return view('home', $data);
});

Route::get('/pag1', function () {
    $data = [
        "title" => "Pag 1",
        "author" => "cyberfolk",
        "imagePath" => "https://picsum.photos"
    ];
    return view('pag1');
});

Route::get('/pag2', function () {
    $data = [
        "title" => "Pag 2",
        "author" => "cyberfolk",
        "imagePath" => "https://picsum.photos"
    ];
    return view('pag2');
});

Route::get('/pag3', function () {
    $data = [
        "title" => "Pag 2",
        "author" => "cyberfolk",
        "imagePath" => "https://picsum.photos"
    ];
    return view('pag3');
});
