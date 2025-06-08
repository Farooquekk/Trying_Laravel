<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello',function(){
    return "<h1>Hello Laravel</h1>";
});

Route::view('/ada','ada');