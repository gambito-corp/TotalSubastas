<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Metodos de Prueba
Route::get('test', 'TestController@test')->name('api.v1.test');

// Metodos de Autorizacion y Token
route::post('login', 'Auth\LoginController@Login')->name('api.v1.login');

//Grupo De Controllador Users
// route::post('user/', 'UserController@Index')->name('api.v1.user.index');
// route::post('user/show/{user}', 'UserController@Show')->name('api.v1.user.show');
route::resource('user', 'UserController');







