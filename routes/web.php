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
Route::get('/index', 'HomeController@index')->name('index');
Route::view('/faqs', 'estaticas.FAQ')->name('faqs'); //Gonzalo esta es la ruta
Route::view('/tyc', 'estaticas.terminos')->name('terminos'); //Gonzalo esta es la ruta
Route::view('polices', 'estaticas.politicas')->name('politicas');

Route::view('/participacion', 'estaticas.participar')->name('participar');
Route::view('/reclamos', 'estaticas.reclamos')->name('reclamos');
Route::view('/vender', 'estaticas.vender')->name('vender');
Route::view('/asesoria', 'estaticas.asesoria')->name('asesoria');


//Route::get('/sell', 'HomeController@sell')->name('sell');
//Route::get('/about', 'HomeController@aboutus')->name('aboutus');
//Route::get('/terms', 'HomeController@terms')->name('terms');
//Route::get('/my-account', 'HomeController@myaccount')->name('myaccount');
//Route::get('/my-account/edit/{id}', 'HomeController@myaccountEdit')->name('editmyaccount');
//Route::get('/users', 'HomeController@users')->name('users.all');
//Route::get('/account', 'HomeController@accout')->name('users.all');
//Route::get('/game', 'HomeController@game')->name('game.show');
//Route::get('/chat/{id}', 'ChatController@ShowChat')->name('chat.show')->middleware('verified');
//Route::post('/chat/message', 'ChatController@MessageReceived')->name('chat.message');

//Rutas de Subasta
Route::get('/auction', 'AuctionsController@index')->name('auction');
Route::get('/auction/id/{id}', 'AuctionsController@show')->name('subastaOnline');
Route::get('/live/auction/id/{id}', 'AuctionsController@live')->name('auctionLiveDetail');
Route::get('/endAuction/{id}', 'AuctionsController@livEnd')->name('endAuc');

////testeo
//Route::resource('file', 'store');
//Route::get('/test', 'ChatController@Test')->name('test');

Auth::routes(['verify' => true]);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

/*
CONSTRUYE UNA URL PARA VER EL PARAMETRO
*/
Route::get('test/consulta/{id}', 'HomeController@testAjax');
/*
FIN DE LA CONSTRUCCION
 */



/* RUTA DE TEST */
Route::view('indextest', 'test.index');
Route::view('showtest', 'test.show');
Route::view('livetest', 'test.live');
Route::view('testAjax', 'include._test');


