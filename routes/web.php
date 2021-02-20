<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'inicioController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


# ruta vista menus
Route::get('/menu.index', 'inicioController@menu')->name('menu');
Route::get('/TuMenu', 'inicioController@show')->name('menu.show');

// ruta primer paso 
Route::get('/step', 'inicioController@step')->name('pasos');
