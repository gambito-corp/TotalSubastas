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
Route::get('/faqs', 'HomeController@faqs')->name('faqs');
Route::get('/auction', 'HomeController@auction')->name('auction');
Route::get('/sell', 'HomeController@sell')->name('sell');
Route::get('/about', 'HomeController@aboutus')->name('aboutus');
Route::get('/terms', 'HomeController@terms')->name('terms');
Route::get('/auction/{id}', 'HomeController@auctionDetail')->name('auctionDetail');
Route::get('/auction/live/{id}', 'HomeController@auctionLiveDetail')->name('auctionLiveDetail');
Route::get('/my-account', 'HomeController@myaccount')->name('myaccount');
Route::get('/my-account/edit', 'HomeController@myaccountEdit')->name('editmyaccount');
Route::get('/users', 'HomeController@users')->name('users.all');
Route::get('/account', 'HomeController@accout')->name('users.all');
Route::get('/game', 'HomeController@game')->name('game.show');
Route::get('/chat', 'ChatController@ShowChat')->name('chat.show');
Route::post('/chat/message', 'ChatController@MessageReceived')->name('chat.message');
//testeo
Route::get('/test', 'ChatController@Test')->name('test');

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
