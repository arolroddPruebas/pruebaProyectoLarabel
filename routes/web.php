<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

//No pongo el nombre de la funcion porque solo hay una y la hemos declarado __invoke
Route::get('/', HomeController::class);

//Rutas Creadas utilizando los controladores
Route::get('/post', PostController::class.'@index');
Route::get('/post/create', PostController::class.'@create');
Route::get('/post/{post}', PostController::class.'@show');