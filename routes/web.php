<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'welcome to laravel';
});


Route::get('/post',function () {
    return 'post';
});