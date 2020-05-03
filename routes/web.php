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
Route::get('/admin/rol', 'RolesController@index')->name('rol.index');
Route::get('/admin/rol/crear', 'RolesController@create')->name('rol.create');
Route::get('/admin/rol/edit/{rol}', 'RolesController@edit')->name('rol.edit');
Route::get('/admin/rol/trash', 'RolesController@Trash')->name('rol.trash');
Route::get('/admin/rol/imagen/{filename}', 'RolesController@getImagen')->name('rol.imagen');
Route::get('/admin/rol/{rol}', 'RolesController@show')->name('rol.show');
Route::post('/admin/rol', 'RolesController@store')->name('rol.store');
Route::patch('/admin/rol/{rol}', 'RolesController@update')->name('rol.update');
Route::post('admin/rol/{rol}', 'RolesController@delete')->name('rol.delete');
Route::put('/admin/rol/{rol}', 'RolesController@restore')->name('rol.restore');
Route::delete('admin/rol/{rol}', 'RolesController@destroy')->name('rol.destroy');

//Rutas de Permisos
Route::resource('admin/permisos', 'PermisosController');
Route::get('/admin/permiso/trash', 'PermisosController@Trash')->name('permisos.trash');
Route::get('admin/permisos/delete/{permisos}', 'PermisosController@delete')->name('permisos.delete');
Route::get('/admin/permisos/trash/{permisos}', 'permisosController@restore')->name('permisos.restore');
Route::get('/admin/permisos/imagen/{filename}', 'permisosController@getImagen')->name('permisos.imagen');

//Rutas de RolPermisos
Route::resource('admin/accesos', 'RolespermisosController');
Route::get('/admin/acceso/trash', 'RolespermisosController@Trash')->name('accesos.trash');
Route::get('admin/accesos/delete/{accesos}', 'RolespermisosController@delete')->name('accesos.delete');
Route::get('/admin/accesos/trash/{accesos}', 'RolespermisosController@restore')->name('accesos.restore');
Route::get('/admin/accesos/imagen/{filename}', 'RolespermisosController@getImagen')->name('accesos.imagen');

// Rutas de Usuario
Route::resource('admin/user', 'UserController');
Route::get('/admin/users/trash', 'UserController@Trash')->name('user.trash');
Route::get('admin/user/delete/{user}', 'UserController@delete')->name('user.delete');
Route::get('/admin/user/trash/{user}', 'UserController@restore')->name('user.restore');
Route::get('/admin/user/imagen/{filename}', 'UserController@getImagen')->name('user.imagen');

//rutas de Autenticacion
// Route::post('Logueate', 'UserController@logueo')->name('user.logueo');
// Route::get('registrar', 'UserController@registro')->name('user.register');

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




