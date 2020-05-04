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


/*
* MACRO RUTAS DEL ADMINISTRADOR
*/
Route::get('admin', 'AdminController@index')->name('admin.index');

//Rutas de Rol
Route::get('/rol', 'RolesController@index')->name('rol.index');
Route::get('/rol/crear', 'RolesController@create')->name('rol.create');
Route::get('/rol/trash', 'RolesController@Trash')->name('rol.trash');
Route::get('/rol/edit/{rol}', 'RolesController@edit')->name('rol.edit');
Route::get('/rol/imagen/{filename}', 'RolesController@getImagen')->name('rol.imagen');
Route::get('/rol/{rol}', 'RolesController@show')->name('rol.show');


Route::post('/rol', 'RolesController@store')->name('rol.store');
Route::patch('/rol/{rol}', 'RolesController@update')->name('rol.update');
Route::post('/rol/{rol}', 'RolesController@delete')->name('rol.delete');
Route::put('/rol/{rol}', 'RolesController@restore')->name('rol.restore');
Route::delete('/rol/eliminar/{rol}', 'RolesController@destroy')->name('rol.destroy');
// Auth
Route::group(['namespace' => 'Auth'], function () {
    Route::get('registro', 'RegisterController@showRegistrationForm')->name('register');
    Route::post('registro', 'RegisterController@Register')->name('register');
    Route::get('login', 'LoginController@showLoginForm')->name('login')->middleware('guest');
    Route::post('login', 'LoginController@login')->name('login');
    Route::post('logout', 'LoginController@logout')->name('logout');
    // Route::post('Logueate', 'ForgotPasswordController')->name('user.logueo');
    // Route::post('Logueate', 'RegisterController')->name('user.logueo');
    // Route::post('Logueate', 'ResetPasswordController')->name('user.logueo');
    // Route::post('Logueate', 'VerificationController')->name('user.logueo');
});




