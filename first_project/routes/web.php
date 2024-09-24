<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::view('/about', 'about');

Route::view('/contact', 'contact');


Route::get('/userId',function(){
    return "<h1>Hello World</h1>";
});

Route::get('userid{id}', function(int $id){

    return "<h1>The number is :". $id . "</h1>";
})->whereNumber('id');

Route::get('userName{name}', function(string $name){

    return "<h1>The name is :". $name . "</h1>";
})->whereAlpha('name');

Route::view('/user','user');
