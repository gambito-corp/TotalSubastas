<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@home')->name('home');
Route::get('/users', 'HomeController@users')->name('users.all');
Route::get('/game', 'HomeController@game')->name('game.show');

Route::get('/chat', 'ChatController@ShowChat')->name('chat.show');
Route::post('/chat/message', 'ChatController@MessageReceived')->name('chat.message');

Auth::routes();

