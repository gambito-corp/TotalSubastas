<?php

//use Illuminate\Support\Facades\Auth;
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
Route::get('admin', 'admin\AdminController@home')->name('admin');
Route::prefix('admin')->name('admin.')->namespace('admin')->group(function (){
    Route::prefix('rol')->name('rol.')->namespace('rol')->group(function (){
        //Roles
        Route::get('index', 'RolesController@index')->name('index');
        Route::get('trash', 'RolesController@trash')->name('trash');
        Route::get('create', 'RolesController@create')->name('create');
        Route::post('guardar', 'RolesController@store')->name('store');
        Route::get('mostrar/{id}', 'RolesController@show')->name('show');
        Route::get('editar/{id}', 'RolesController@edit')->name('edit');
        Route::put('actualizar/{id}', 'RolesController@update')->name('update');
        Route::get('delete/{id}', 'RolesController@delete')->name('delete');
        Route::get('destroy/{id}', 'RolesController@destroy')->name('destroy')->middleware('password.confirm');
        Route::get('restore/{id}', 'RolesController@restore')->name('restore');
    });
    Route::prefix('marcas')->name('marcas.')->namespace('marcas')->group(function (){
        //Marcas
        Route::get('index', 'MarcasController@index')->name('index');
        Route::get('trash', 'MarcasController@trash')->name('trash');
        Route::get('create', 'MarcasController@create')->name('create');
        Route::post('guardar', 'MarcasController@store')->name('store');
        Route::get('mostrar/{id}', 'MarcasController@show')->name('show');
        Route::get('editar/{id}', 'MarcasController@edit')->name('edit');
        Route::put('actualizar/{id}', 'MarcasController@update')->name('update');
        Route::get('delete/{id}', 'MarcasController@delete')->name('delete');
        Route::get('destroy/{id}', 'MarcasController@destroy')->name('destroy')->middleware('password.confirm');
        Route::get('restore/{id}', 'MarcasController@restore')->name('restore');
    });
    Route::prefix('bancos')->name('bancos.')->namespace('bancos')->group(function (){
        //Bancos
        Route::get('index', 'BancosController@index')->name('index');
        Route::get('trash', 'BancosController@trash')->name('trash');
        Route::get('create', 'BancosController@create')->name('create');
        Route::post('guardar', 'BancosController@store')->name('store');
        Route::get('mostrar/{id}', 'BancosController@show')->name('show');
        Route::get('editar/{id}', 'BancosController@edit')->name('edit');
        Route::put('actualizar/{id}', 'BancosController@update')->name('update');
        Route::get('delete/{id}', 'BancosController@delete')->name('delete');
        Route::get('destroy/{id}', 'BancosController@destroy')->name('destroy')->middleware('password.confirm');
        Route::get('restore/{id}', 'BancosController@restore')->name('restore');
    });
    Route::prefix('pais')->name('pais.')->namespace('pais')->group(function (){
        //Countries
        Route::get('index', 'PaisController@index')->name('index');
        Route::get('trash', 'PaisController@trash')->name('trash');
        Route::get('create', 'PaisController@create')->name('create');
        Route::post('guardar', 'PaisController@store')->name('store');
        Route::get('mostrar/{id}', 'PaisController@show')->name('show');
        Route::get('editar/{id}', 'PaisController@edit')->name('edit');
        Route::put('actualizar/{id}', 'PaisController@update')->name('update');
        Route::get('delete/{id}', 'PaisController@delete')->name('delete');
        Route::get('destroy/{id}', 'PaisController@destroy')->name('destroy')->middleware('password.confirm');
        Route::get('restore/{id}', 'PaisController@restore')->name('restore');
    });
    Route::prefix('user')->name('user.')->namespace('user')->group(function (){
        //Countries
        Route::get('index', 'UserController@index')->name('index');
        Route::get('trash', 'UserController@trash')->name('trash');
        Route::get('create', 'UserController@create')->name('create');
        Route::post('guardar', 'UserController@store')->name('store');
        Route::get('mostrar/{id}', 'UserController@show')->name('show');
        Route::get('editar/{id}', 'UserController@edit')->name('edit');
        Route::put('actualizar/{id}', 'UserController@update')->name('update');
        Route::get('delete/{id}', 'UserController@delete')->name('delete');
        Route::get('destroy/{id}', 'UserController@destroy')->name('destroy')->middleware('password.confirm');
        Route::get('restore/{id}', 'UserController@restore')->name('restore');
        Route::get('personificacion/{id}', 'UserController@personificacion')->name('personificacion');
    });
});

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
Route::post('/live/auction/puja/{id}', 'AuctionsController@pujaRecibida')->name('pujaRecibida');
Route::get('/endAuction', 'AuctionsController@livEnd')->name('endAuc');
Route::get('/noBalance', 'AuctionsController@noBalance')->name('noBalance');

////testeo
//Route::resource('file', 'store');
Route::get('/test', 'ChatController@Test')->name('test');
//Route::post('/test/message/{id}', 'ChatController@TestEnviado')->name('test.message');

Auth::routes(['verify' => true]);

/* RUTA DE TEST */
Route::get('indextest', 'HomeController@test');
Route::view('showtest', 'test.show');
Route::view('livetest', 'test.live');
Route::view('testAjax', 'include._test');


