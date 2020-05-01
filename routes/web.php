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

//Ruta de inicio
Route::get('/', function () {
    return view('home');
})->name('home');

// Rutas de Usuario
Route::resource('admin/user', 'UserController');

//rutas de Autenticacion
Route::get('registrar', 'UserController@registro')->name('user.register');
Route::get('Logueate', 'UserController@login')->name('user.login');
Route::post('Logueate', 'UserController@logueo')->name('user.logueo');
// Route::post('Logueate', 'ForgotPasswordController')->name('user.logueo');
// Route::post('Logueate', 'LoginController')->name('user.logueo');
// Route::post('Logueate', 'RegisterController')->name('user.logueo');
// Route::post('Logueate', 'ResetPasswordController')->name('user.logueo');
// Route::post('Logueate', 'VerificationController')->name('user.logueo');


/*
* MACRO RUTAS DEL ADMINISTRADOR
*/
Route::get('administracion', 'AdminController@index')->name('admin.index');


