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

//VISTAS ESTATICAS
Route::view('/faqs', 'estaticas.FAQ')->name('faqs'); //Gonzalo esta es la ruta
Route::view('/tyc', 'estaticas.terminos')->name('terminos'); //Gonzalo esta es la ruta
Route::view('/polices', 'estaticas.politicas')->name('politicas');
Route::view('/participacion', 'estaticas.participar')->name('participar');
Route::view('/reclamos', 'estaticas.reclamos')->name('reclamos');
Route::view('/vender', 'estaticas.vender')->name('vender');
Route::view('/asesoria', 'estaticas.asesoria')->name('asesoria');
Route::view('/creditos', 'estaticas.credito')->name('creditos');


// RUTAS DE ADMINISTRADOR
Route::get('admin', 'AdminController@home')->name('admin');
//Roles
Route::get('admin/roles', 'RolesController@index')->name('admin.roles');
Route::get('admin/roles/create', 'RolesController@create')->name('admin.roles.create');
Route::get('admin/roles/{rol}', 'RolesController@show')->name('admin.roles.show');
Route::put('admin/roles/{rol}', 'RolesController@edit')->name('admin.roles.edit');
Route::delete('admin/roles/{rol}', 'RolesController@edit')->name('admin.roles.delete');
//Marcas
Route::get('admin/marcas/index', 'MarcasController@index')->name('admin.marcas.index');
Route::get('admin/marcas/trash', 'MarcasController@trash')->name('admin.marcas.trash');
Route::get('admin/marcas/create', 'MarcasController@create')->name('admin.marcas.create');
Route::post('admin/marcas/guardar', 'MarcasController@store')->name('admin.marcas.store');
Route::get('admin/marca/mostrar/{marca}', 'MarcasController@show')->name('admin.marcas.show');
Route::get('admin/marcas/editar/{marca}', 'MarcasController@edit')->name('admin.marcas.edit');
Route::put('admin/marcas/actualizar/{marca}', 'MarcasController@update')->name('admin.marcas.update');
Route::get('admin/marcas/delete/{marca}', 'MarcasController@delete')->name('admin.marcas.delete');
Route::get('admin/marcas/destroy/{id}', 'MarcasController@destroy')->name('admin.marcas.destroy');
Route::get('admin/marcas/restore/{id}', 'MarcasController@restore')->name('admin.marcas.restore');
//Modelo
Route::get('admin/modelos/index', 'ModeloController@index')->name('admin.modelos.index');
Route::get('admin/modelos/trash', 'ModeloController@trash')->name('admin.modelos.trash');
Route::get('admin/modelos/create', 'ModeloController@create')->name('admin.modelos.create');
Route::post('admin/modelos/guardar', 'ModeloController@store')->name('admin.modelos.store');
Route::get('admin/modelos/mostrar/{modelo}', 'ModeloController@show')->name('admin.modelos.show');
Route::get('admin/modelos/editar/{modelo}', 'ModeloController@edit')->name('admin.modelos.edit');
Route::put('admin/modelos/actualizar/{modelo}', 'ModeloController@update')->name('admin.modelos.update');
Route::get('admin/modelos/delete/{modelo}', 'ModeloController@delete')->name('admin.modelos.delete');
Route::get('admin/modelos/destroy/{id}', 'ModeloController@destroy')->name('admin.modelos.destroy');
Route::get('admin/modelos/restore/{id}', 'ModeloController@restore')->name('admin.modelos.restore');

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

Route::group(['prefix' => 'admin2'], function () {
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


