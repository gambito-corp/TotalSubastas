<?php

use App\cliente;
use App\cliente_natural;
use App\User;
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
Route::get('/', 'frontController@index')->name('index');

//Rutas de Rol
Route::resource('admin/rol', 'rolesController');

//Rutas de Permisos
Route::resource('admin/permisos', 'PermisosController');

//Rutas de RolPermisos
Route::resource('admin/accesos', 'RolespermisosController');

// Rutas de Usuario
Route::resource('admin/user', 'UserController');

//rutas de Autenticacion
// Route::get('registrar', 'UserController@registro')->name('user.register');
// Route::post('Logueate', 'UserController@logueo')->name('user.logueo');

Route::group(['namespace' => 'Auth'], function () {
    Route::get('login', 'LoginController@showLoginForm')->name('login')->middleware('guest');
    Route::post('login', 'LoginController@login')->name('login');
    Route::post('logout', 'LoginController@logout')->name('logout');
    Route::get('registro', 'RegisterController@showRegistrationForm')->name('register');
    Route::post('registro', 'RegisterController@Register')->name('register');
    // Route::post('Logueate', 'ForgotPasswordController')->name('user.logueo');
    // Route::post('Logueate', 'RegisterController')->name('user.logueo');
    // Route::post('Logueate', 'ResetPasswordController')->name('user.logueo');
    // Route::post('Logueate', 'VerificationController')->name('user.logueo');
});


/*
* MACRO RUTAS DEL ADMINISTRADOR
*/
Route::get('administracion', 'AdminController@index')->name('admin.index');


