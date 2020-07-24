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


//VISTAS ESTATICAS
Route::view('/faqs', 'estaticas.FAQ')->name('faqs'); //Gonzalo esta es la ruta
Route::view('/tyc', 'estaticas.terminos')->name('terminos'); //Gonzalo esta es la ruta
Route::view('/polices', 'estaticas.politicas')->name('politicas');
Route::view('/participacion', 'estaticas.participar')->name('participar');
Route::view('/reclamos', 'estaticas.reclamos')->name('reclamos');
Route::view('/vender', 'estaticas.vender')->name('vender');
Route::view('/asesoria', 'estaticas.asesoria')->name('asesoria');
Route::view('/creditos', 'estaticas.credito')->name('creditos');

//VISTA DE PERFIL

Route::get('/perfil', 'PerfilController@show')->name('perfil');
Route::get('/perfil/edit', 'PerfilController@edit')->name('perfil.edit');
Route::patch('/perfil', 'PerfilController@update')->name('perfil');

// RUTAS DE ADMINISTRADOR
Route::get('admin', 'AdminController@home')->name('admin');
//Roles
Route::get('admin/rol/index', 'RolesController@index')->name('admin.rol.index');
Route::get('admin/rol/trash', 'RolesController@trash')->name('admin.rol.trash');
Route::get('admin/rol/create', 'RolesController@create')->name('admin.rol.create');
Route::post('admin/rol/guardar', 'RolesController@store')->name('admin.rol.store');
Route::get('admin/rol/mostrar/{id}', 'RolesController@show')->name('admin.rol.show');
Route::get('admin/rol/editar/{id}', 'RolesController@edit')->name('admin.rol.edit');
Route::put('admin/rol/actualizar/{id}', 'RolesController@update')->name('admin.rol.update');
Route::get('admin/rol/delete/{id}', 'RolesController@delete')->name('admin.rol.delete');
Route::get('admin/rol/destroy/{id}', 'RolesController@destroy')->name('admin.rol.destroy')->middleware('password.confirm');
Route::get('admin/rol/restore/{id}', 'RolesController@restore')->name('admin.rol.restore');
//Marcas
Route::get('admin/marcas/index', 'MarcasController@index')->name('admin.marcas.index');
Route::get('admin/marcas/trash', 'MarcasController@trash')->name('admin.marcas.trash');
Route::get('admin/marcas/create', 'MarcasController@create')->name('admin.marcas.create');
Route::post('admin/marcas/guardar', 'MarcasController@store')->name('admin.marcas.store');
Route::get('admin/marca/mostrar/{id}', 'MarcasController@show')->name('admin.marcas.show');
Route::get('admin/marcas/editar/{id}', 'MarcasController@edit')->name('admin.marcas.edit');
Route::put('admin/marcas/actualizar/{id}', 'MarcasController@update')->name('admin.marcas.update');
Route::get('admin/marcas/delete/{id}', 'MarcasController@delete')->name('admin.marcas.delete');
Route::get('admin/marcas/destroy/{id}', 'MarcasController@destroy')->name('admin.marcas.destroy')->middleware('password.confirm');;
Route::get('admin/marcas/restore/{id}', 'MarcasController@restore')->name('admin.marcas.restore');
//Bancos
Route::get('admin/bancos/index', 'BancosController@index')->name('admin.bancos.index');
Route::get('admin/bancos/trash', 'BancosController@trash')->name('admin.bancos.trash');
Route::get('admin/bancos/create', 'BancosController@create')->name('admin.bancos.create');
Route::post('admin/bancos/guardar', 'BancosController@store')->name('admin.bancos.store');
Route::get('admin/bancos/mostrar/{id}', 'BancosController@show')->name('admin.bancos.show');
Route::get('admin/bancos/editar/{id}', 'BancosController@edit')->name('admin.bancos.edit');
Route::put('admin/bancos/actualizar/{id}', 'BancosController@update')->name('admin.bancos.update');
Route::get('admin/bancos/delete/{id}', 'BancosController@delete')->name('admin.bancos.delete');
Route::get('admin/bancos/destroy/{id}', 'BancosController@destroy')->name('admin.bancos.destroy')->middleware('password.confirm');;
Route::get('admin/bancos/restore/{id}', 'BancosController@restore')->name('admin.bancos.restore');
//Countries
Route::get('admin/marcas/index', 'MarcasController@index')->name('admin.marcas.index');
Route::get('admin/marcas/trash', 'MarcasController@trash')->name('admin.marcas.trash');
Route::get('admin/marcas/create', 'MarcasController@create')->name('admin.marcas.create');
Route::post('admin/marcas/guardar', 'MarcasController@store')->name('admin.marcas.store');
Route::get('admin/marca/mostrar/{id}', 'MarcasController@show')->name('admin.marcas.show');
Route::get('admin/marcas/editar/{id}', 'MarcasController@edit')->name('admin.marcas.edit');
Route::put('admin/marcas/actualizar/{id}', 'MarcasController@update')->name('admin.marcas.update');
Route::get('admin/marcas/delete/{id}', 'MarcasController@delete')->name('admin.marcas.delete');
Route::get('admin/marcas/destroy/{id}', 'MarcasController@destroy')->name('admin.marcas.destroy')->middleware('password.confirm');;
Route::get('admin/marcas/restore/{id}', 'MarcasController@restore')->name('admin.marcas.restore');

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
Route::get('/noBalance', 'AuctionsController@noBalance')->name('noBalance');

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
Route::get('indextest', 'HomeController@test');
Route::view('showtest', 'test.show');
Route::view('livetest', 'test.live');
Route::view('testAjax', 'include._test');


