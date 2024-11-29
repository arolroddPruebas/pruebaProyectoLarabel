<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   return view('welcome');
});


Route::get('/post',function () {
    return view('prueba');
});

Route::get('/post/{post}', function($post){
    return $post;
});

Route::get('/post/{post}/{comment}', function($post,$comment){
    return "el post es {$post} y la funcion es {$comment}";
});