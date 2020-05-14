<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

// DB::listen(function($query){
//     echo "<pre>{$query->time}</pre>";
// });
// DB::listen(function($query){
//     echo "<pre>{$query->sql}</pre>";
// });

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

Route::get('/', function () {
    return view('welcome');
})->name('index');


//RUTAS DE AUTH
//rutas de Login
Route::get('login', 'Auth\LoginController@ShowLoginForm')->name('login')->middleware('guest');
Route::post('login', 'Auth\LoginController@Login');
Route::post('logout', 'Auth\LoginController@Logout')->name('logout');
//rutas de Registro
Route::get('register', 'Auth\RegisterController@ShowRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@Register');
//rutas de reset
Route::get('password/reset', 'Auth\ForgotPasswordController@SowhLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@SendResetLinkEmail')->name('password.request');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@SowhLinkRequestForm')->name('password.request');
Route::post('password/reset', 'Auth\ResetPasswordController@SendResetLinkEmail')->name('password.request');
//Rutas de Confirmacion de contraseña
Route::get('confirmar/contraseña', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
Route::post('confirmar/contraseña', 'Auth\ConfirmPasswordController@confirm')->name('password.confirm');

//RUTAS DEL ADMIN
Route::get('/panel', 'HomeController@index')->name('home');

//RUTAS DE ROL
//index
route::get('panel/rol', 'RolController@index')->name('rol.index');
route::get('panel/rol/papelera', 'RolController@trash')->name('rol.trash');
//Creacion y Edicion
route::get('panel/rol/crear', 'RolController@create')->name('rol.create');
route::get('panel/rol/actualizar/{rol}', 'RolController@edit')->name('rol.edit');
route::get('panel/rol/{rol}', 'RolController@show')->name('rol.show');
//proceso REST
route::post('panel/rol/restaurar/{id}', 'RolController@restore')->name('rol.restore');
route::post('panel/rol/', 'RolController@store')->name('rol.store');
route::patch('panel/rol/{rol}', 'RolController@update')->name('rol.update');
route::put('panel/rol/{rol}', 'RolController@delete')->name('rol.delete');
route::delete('panel/rol/{rol}', 'RolController@destroy')->name('rol.destroy')->middleware(['auth', 'password.confirm']);

//RUTAS DE Autorizacion/controladores
//index
route::get('panel/autorizacion', 'AutorizacionController@index')->name('Autorizacion.index');
route::get('panel/autorizacion/papelera', 'AutorizacionController@trash')->name('Autorizacion.trash');
//Creacion y Edicion
route::get('panel/autorizacion/crear', 'AutorizacionController@create')->name('Autorizacion.create');
route::get('panel/autorizacion/actualizar/{autorizacion}', 'AutorizacionController@edit')->name('Autorizacion.edit');
route::get('panel/autorizacion/{autorizacion}', 'AutorizacionController@show')->name('Autorizacion.show');
//proceso REST
route::post('panel/autorizacion/restaurar/{id}', 'AutorizacionController@restore')->name('Autorizacion.restore');
route::post('panel/autorizacion/', 'AutorizacionController@store')->name('Autorizacion.store');
route::patch('panel/autorizacion/{autorizacion}', 'AutorizacionController@update')->name('Autorizacion.update');
route::put('panel/autorizacion/{autorizacion}', 'AutorizacionController@delete')->name('Autorizacion.delete');
route::delete('panel/autorizacion/{autorizacion}', 'AutorizacionController@destroy')->name('Autorizacion.destroy')->middleware(['auth', 'password.confirm']);

//RUTAS DE PERMISOS
//index
route::get('panel/permiso', 'PermisoController@index')->name('Permiso.index');
route::get('panel/permiso/papelera', 'PermisoController@trash')->name('Permiso.trash');
//Creacion y Edicion
route::get('panel/permiso/crear', 'PermisoController@create')->name('Permiso.create');
route::get('panel/permiso/actualizar/{permiso}', 'PermisoController@edit')->name('Permiso.edit');
route::get('panel/permiso/{permiso}', 'PermisoController@show')->name('Permiso.show');
//proceso REST
route::post('panel/permiso/restaurar/{id}', 'PermisoController@restore')->name('Permiso.restore');
route::post('panel/permiso/', 'PermisoController@store')->name('Permiso.store');
route::patch('panel/permiso/{permiso}', 'PermisoController@update')->name('Permiso.update');
route::put('panel/permiso/{permiso}', 'PermisoController@delete')->name('Permiso.delete');
route::delete('panel/permiso/{permiso}', 'PermisoController@destroy')->name('Permiso.destroy')->middleware(['auth', 'password.confirm']);


//RUTAS DE ACCESO
//index
route::get('panel/acceso', 'AccesoController@index')->name('Acceso.index');
route::get('panel/acceso/papelera', 'AccesoController@trash')->name('Acceso.trash');
//Creacion y Edicion
route::get('panel/acceso/crear', 'AccesoController@create')->name('Acceso.create');
route::get('panel/acceso/actualizar/{acceso}', 'AccesoController@edit')->name('Acceso.edit');
route::get('panel/acceso/{acceso}', 'AccesoController@show')->name('Acceso.show');
//proceso REST
route::post('panel/acceso/restaurar/{id}', 'AccesoController@restore')->name('Acceso.restore');
route::post('panel/acceso/', 'AccesoController@store')->name('Acceso.store');
route::patch('panel/acceso/{acceso}', 'AccesoController@update')->name('Acceso.update');
route::put('panel/acceso/{acceso}', 'AccesoController@delete')->name('Acceso.delete');
route::delete('panel/acceso/{acceso}', 'AccesoController@destroy')->name('Acceso.destroy');

//RUTAS DE USER
//index
route::post('panel/user/personificacion', 'UserController@Personificacion')->name('User.personificar');
route::post('panel/user/inpersonificacion', 'UserController@Inpersonificacion')->name('User.inpersonificar');
route::get('panel/user', 'UserController@index')->name('User.index');
route::get('panel/user/papelera', 'UserController@trash')->name('User.trash');
//Creacion y Edicion
route::get('panel/user/crear', 'UserController@create')->name('User.create');
route::get('panel/user/actualizar/{user}', 'UserController@edit')->name('User.edit');
route::get('panel/user/{user}', 'UserController@show')->name('User.show');
//proceso REST
route::post('panel/user/restaurar/{id}', 'UserController@restore')->name('User.restore');
route::post('panel/user/', 'UserController@store')->name('User.store');
route::patch('panel/user/{user}', 'UserController@update')->name('User.update');
route::put('panel/user/{user}', 'UserController@delete')->name('User.delete');
route::delete('panel/user/{user}', 'UserController@destroy')->name('User.destroy');

//RUTAS DE AVATARES
//index
route::get('panel/avatar', 'AvatarController@index')->name('Avatar.index');
route::get('panel/avatar/papelera', 'AvatarController@trash')->name('Avatar.trash');
//Creacion y Edicion
route::get('panel/avatar/crear', 'AvatarController@create')->name('Avatar.create');
route::get('panel/avatar/actualizar/{avatar}', 'AvatarController@edit')->name('Avatar.edit');
route::get('panel/avatar/{avatar}', 'AvatarController@show')->name('Avatar.show');
//proceso REST
route::post('panel/avatar/restaurar/{id}', 'AvatarController@restore')->name('Avatar.restore');
route::post('panel/avatar/', 'AvatarController@store')->name('Avatar.store');
route::patch('panel/avatar/{avatar}', 'AvatarController@update')->name('Avatar.update');
route::put('panel/avatar/{avatar}', 'AvatarController@delete')->name('Avatar.delete');
route::delete('panel/avatar/{avatar}', 'AvatarController@destroy')->name('Avatar.destroy')->middleware(['auth', 'password.confirm']);

//RUTAS DE Autorizacion/controladores
//index
route::get('panel/testTelefono', 'TelefonoNikController@index')->name('TelefonoNick.index');






