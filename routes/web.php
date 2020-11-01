<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Index
Route::get('/', 'HomeController@index')->name('index');
Route::get('/contacto', 'HomeController@contacto')->name('contacto');

//Vistas Estaticas
Route::view('/faqs', 'estaticas.FAQ')->name('faqs'); //Gonzalo esta es la ruta
Route::view('/tyc', 'estaticas.terminos')->name('terminos'); //Gonzalo esta es la ruta
Route::view('/polices', 'estaticas.politicas')->name('politicas');
Route::view('/participacion', 'estaticas.participar')->name('participar');
Route::view('/quienessomos', 'estaticas.quienessomos')->name('quienessomos');
Route::view('/reclamos', 'estaticas.reclamos')->name('contacto');
Route::view('/vender', 'estaticas.vender')->name('vender');
Route::view('/asesoria', 'estaticas.asesoria')->name('asesoria');
Route::view('/creditos', 'estaticas.credito')->name('creditos');

//Rutas de Subasta
Route::get('/auction', 'AuctionsController@index')->name('auction')->middleware('perfilCompleto');
Route::get('/auction/id/{id}', 'AuctionsController@show')->name('subastaOnline')->middleware('perfilCompleto');
Route::get('/live/auction/id/{id}', 'AuctionsController@live')->name('auctionLiveDetail')->middleware('perfilCompleto');
Route::post('/live/auction/puja/{id}', 'AuctionsController@pujaRecibida')->name('pujaRecibida')->middleware('perfilCompleto');
Route::get('/endAuction/{id}', 'AuctionsController@livEnd')->name('endAuc')->middleware('perfilCompleto');
Route::get('/noBalance', 'AuctionsController@noBalance')->name('noBalance')->middleware('perfilCompleto');

// Rutas Auth
Auth::routes(['verify' => true, 'register' => false]);
//Route::

//Vistas de Perfil
Route::get('/confirmar/usuario/{id}', 'PerfilController@confirm')->name('confirm');
Route::get('/perfil', 'PerfilController@show')->name('perfil');
Route::get('/perfil/edit', 'PerfilController@paso1')->name('perfil.edit');
Route::patch('/perfil', 'PerfilController@update')->name('perfil.update');
Route::get('/recargar', 'PerfilController@recargar')->name('recargar.perfil');
Route::get('/password', 'PerfilController@password')->name('password.perfil');
Route::post('/password', 'PerfilController@change')->name('change.perfil');
Route::get('/imagen', 'PerfilController@setAvatar')->name('imagen.perfil');
Route::post('/saveImagen', 'PerfilController@saveAvatar')->name('save.perfil');



Route::get('/paso1', 'PerfilController@paso1')->name('perfil.paso1');
Route::get('/paso2', 'PerfilController@paso2')->name('perfil.paso2');
Route::get('/paso3', 'PerfilController@paso3')->name('perfil.paso3');
Route::get('/paso4', 'PerfilController@paso4')->name('perfil.paso4');
Route::get('/paso5', 'PerfilController@paso5')->name('perfil.paso5');
Route::get('/paso6', 'PerfilController@paso6')->name('perfil.paso6');
Route::get('/paso7', 'PerfilController@paso7')->name('perfil.paso7');
Route::post('/paso8', 'PerfilController@paso8')->name('perfil.paso8');

//Controladora de Imagenes
Route::get('/avatar/{id}', 'ImagenesController@getAvatar')->name('user.getImagen');
Route::get('/logotipo/{id}', 'ImagenesController@getEmpresa')->name('empresa.getImagen');
Route::get('/producto/{id}', 'ImagenesController@getproducto')->name('producto.getImagen');
Route::get('/producto/set/{id}', 'ImagenesController@getProductoImagen')->name('set.getImagen');
Route::get('/slide/{id}', 'ImagenesController@getSlide')->name('slide.getImagen');
Route::get('/download/{id}/{file}', 'ImagenesController@getDownload')->name('descargar');

//Formularios diversos
Route::post('/citas/{id}', 'AuctionsController@citas')->name('citas');
Route::post('/contacto', 'HomeController@sendmail')->name('contacto');
Route::post('/recargar/envio', 'PerfilController@recargarPost')->name('recargar');

//Registro de Usuarios
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/registro', 'Auth\RegisterController@takeTipe')->name('TakeTipe');
Route::get('/formulario', 'Auth\RegisterController@FormUser')->name('FormUser');
Route::post('/registro/{tipo}', 'Auth\RegisterController@registro')->name('registro');

//Rutras del Administrador
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
        //Usuarios
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
        Route::get('impersonar', 'UserController@impersonificacion')->name('impersonificacion');
        Route::get('imagen/{id}', 'UserController@getImagen')->name('getImagen');
    });
    Route::prefix('direcciones')->name('address.')->namespace('direcciones')->group(function (){
        //Direcciones
        Route::get('index', 'DireccionController@index')->name('index');
        Route::get('trash', 'DireccionController@trash')->name('trash');
        Route::get('create', 'DireccionController@create')->name('create');
        Route::post('guardar', 'DireccionController@store')->name('store');
        Route::get('mostrar/{id}', 'DireccionController@show')->name('show');
        Route::get('editar/{id}', 'DireccionController@edit')->name('edit');
        Route::put('actualizar/{id}', 'DireccionController@update')->name('update');
        Route::get('delete/{id}', 'DireccionController@delete')->name('delete');
        Route::get('destroy/{id}', 'DireccionController@destroy')->name('destroy')->middleware('password.confirm');
        Route::get('restore/{id}', 'DireccionController@restore')->name('restore');
    });
    Route::prefix('auditoria')->name('auditoria.')->namespace('auditoria')->group(function (){
        //Auditoria
        Route::get('index', 'AuditoriaController@index')->name('index');
        Route::get('trash', 'AuditoriaController@trash')->name('trash');
        Route::get('mostrar/{id}', 'AuditoriaController@show')->name('show');
        Route::get('delete/{id}', 'AuditoriaController@delete')->name('delete');
        Route::get('destroy/{id}', 'AuditoriaController@destroy')->name('destroy')->middleware('password.confirm');
        Route::get('restore/{id}', 'AuditoriaController@restore')->name('restore');
    });
    Route::prefix('balance')->name('balance.')->namespace('balance')->group(function (){
        //Balances
        Route::get('index', 'BalanceController@index')->name('index');
        Route::get('trash', 'BalanceController@trash')->name('trash');
        Route::get('create', 'BalanceController@create')->name('create');
        Route::post('guardar', 'BalanceController@store')->name('store');
        Route::get('mostrar/{id}', 'BalanceController@show')->name('show');
        Route::get('editar/{id}', 'BalanceController@edit')->name('edit');
        Route::put('actualizar/{id}', 'BalanceController@update')->name('update');
        Route::get('delete/{id}', 'BalanceController@delete')->name('delete');
        Route::get('destroy/{id}', 'BalanceController@destroy')->name('destroy')->middleware('password.confirm');
        Route::get('restore/{id}', 'BalanceController@restore')->name('restore');
        Route::get('imagen/{id}', 'BalanceController@getImagen')->name('getImagen');
    });
    Route::prefix('persona')->name('persona.')->namespace('persona')->group(function (){
        //Persona Natural
        Route::get('index', 'PersonaController@index')->name('index');
        Route::get('trash', 'PersonaController@trash')->name('trash');
        Route::get('create', 'PersonaController@create')->name('create');
        Route::post('guardar', 'PersonaController@store')->name('store');
        Route::get('mostrar/{id}', 'PersonaController@show')->name('show');
        Route::get('editar/{id}', 'PersonaController@edit')->name('edit');
        Route::put('actualizar/{id}', 'PersonaController@update')->name('update');
        Route::get('delete/{id}', 'PersonaController@delete')->name('delete');
        Route::get('destroy/{id}', 'PersonaController@destroy')->name('destroy')->middleware('password.confirm');
        Route::get('restore/{id}', 'PersonaController@restore')->name('restore');
        Route::get('imagen/{id}', 'PersonaController@getImagen1')->name('getImagen1');
        Route::get('imagen2/{id}', 'PersonaController@getImagen2')->name('getImagen2');
    });
    Route::prefix('juridica')->name('juridica.')->namespace('juridica')->group(function (){
        //Personas Juridicas
        Route::get('index', 'JuridicaController@index')->name('index');
        Route::get('trash', 'JuridicaController@trash')->name('trash');
        Route::get('create', 'JuridicaController@create')->name('create');
        Route::post('guardar', 'JuridicaController@store')->name('store');
        Route::get('mostrar/{id}', 'JuridicaController@show')->name('show');
        Route::get('editar/{id}', 'JuridicaController@edit')->name('edit');
        Route::put('actualizar/{id}', 'JuridicaController@update')->name('update');
        Route::get('delete/{id}', 'JuridicaController@delete')->name('delete');
        Route::get('destroy/{id}', 'JuridicaController@destroy')->name('destroy')->middleware('password.confirm');
        Route::get('restore/{id}', 'JuridicaController@restore')->name('restore');
    });
    Route::prefix('empresa')->name('empresa.')->namespace('empresa')->group(function (){
        //Empresas
        Route::get('index', 'EmpresaController@index')->name('index');
        Route::get('trash', 'EmpresaController@trash')->name('trash');
        Route::get('create', 'EmpresaController@create')->name('create');
        Route::post('guardar', 'EmpresaController@store')->name('store');
        Route::get('mostrar/{id}', 'EmpresaController@show')->name('show');
        Route::get('editar/{id}', 'EmpresaController@edit')->name('edit');
        Route::put('actualizar/{id}', 'EmpresaController@update')->name('update');
        Route::get('delete/{id}', 'EmpresaController@delete')->name('delete');
        Route::get('destroy/{id}', 'EmpresaController@destroy')->name('destroy')->middleware('password.confirm');
        Route::get('restore/{id}', 'EmpresaController@restore')->name('restore');
        Route::get('imagen/{id}', 'EmpresaController@getImagen')->name('getImagen');
    });
    Route::prefix('lote')->name('lote.')->namespace('lote')->group(function (){
        //Lotes
        Route::get('index', 'LoteController@index')->name('index');
        Route::get('trash', 'LoteController@trash')->name('trash');
        Route::get('create', 'LoteController@create')->name('create');
        Route::post('guardar', 'LoteController@store')->name('store');
        Route::get('mostrar/{id}', 'LoteController@show')->name('show');
        Route::get('editar/{id}', 'LoteController@edit')->name('edit');
        Route::put('actualizar/{id}', 'LoteController@update')->name('update');
        Route::get('delete/{id}', 'LoteController@delete')->name('delete');
        Route::get('destroy/{id}', 'LoteController@destroy')->name('destroy')->middleware('password.confirm');
        Route::get('restore/{id}', 'LoteController@restore')->name('restore');
    });
    Route::prefix('almacen')->name('almacen.')->namespace('almacen')->group(function (){
        //Almacen
        Route::get('index', 'AlmacenController@index')->name('index');
        Route::get('trash', 'AlmacenController@trash')->name('trash');
        Route::get('create', 'AlmacenController@create')->name('create');
        Route::post('guardar', 'AlmacenController@store')->name('store');
        Route::get('mostrar/{id}', 'AlmacenController@show')->name('show');
        Route::get('editar/{id}', 'AlmacenController@edit')->name('edit');
        Route::put('actualizar/{id}', 'AlmacenController@update')->name('update');
        Route::get('delete/{id}', 'AlmacenController@delete')->name('delete');
        Route::get('destroy/{id}', 'AlmacenController@destroy')->name('destroy')->middleware('password.confirm');
        Route::get('restore/{id}', 'AlmacenController@restore')->name('restore');
    });
    Route::prefix('producto')->name('producto.')->namespace('producto')->group(function (){
        //Productos
        Route::get('index', 'ProductoController@index')->name('index');
        Route::get('trash', 'ProductoController@trash')->name('trash');
        Route::get('create', 'ProductoController@create')->name('create');
        Route::post('guardar', 'ProductoController@store')->name('store');
        Route::get('mostrar/{id}', 'ProductoController@show')->name('show');
        Route::get('editar/{id}', 'ProductoController@edit')->name('edit');
        Route::put('actualizar/{id}', 'ProductoController@update')->name('update');
        Route::get('delete/{id}', 'ProductoController@delete')->name('delete');
        Route::get('destroy/{id}', 'ProductoController@destroy')->name('destroy')->middleware('password.confirm');
        Route::get('restore/{id}', 'ProductoController@restore')->name('restore');
        Route::get('imagen/{id}', 'ProductoController@getImagen')->name('getImagen');
    });
    Route::prefix('subasta')->name('subasta.')->namespace('subasta')->group(function (){
        //Ganadores de subastas
        Route::get('index', 'SubastaController@index')->name('index');
        Route::get('trash', 'SubastaController@trash')->name('trash');
        Route::get('create', 'SubastaController@create')->name('create');
        Route::post('guardar', 'SubastaController@store')->name('store');
        Route::get('mostrar/{id}', 'SubastaController@show')->name('show');
        Route::get('editar/{id}', 'SubastaController@edit')->name('edit');
        Route::put('actualizar/{id}', 'SubastaController@update')->name('update');
        Route::get('delete/{id}', 'SubastaController@delete')->name('delete');
        Route::get('destroy/{id}', 'SubastaController@destroy')->name('destroy')->middleware('password.confirm');
        Route::get('restore/{id}', 'SubastaController@restore')->name('restore');
    });
    Route::prefix('imagenesproducto')->name('imagenesproducto.')->namespace('imagenesproducto')->group(function (){
        //Imagenes de Producto
        Route::get('index', 'ImagenesProductoController@index')->name('index');
        Route::get('trash', 'ImagenesProductoController@trash')->name('trash');
        Route::get('create', 'ImagenesProductoController@create')->name('create');
        Route::post('guardar', 'ImagenesProductoController@store')->name('store');
        Route::get('mostrar/{id}', 'ImagenesProductoController@show')->name('show');
        Route::get('editar/{id}', 'ImagenesProductoController@edit')->name('edit');
        Route::put('actualizar/{id}', 'ImagenesProductoController@update')->name('update');
        Route::get('delete/{id}', 'ImagenesProductoController@delete')->name('delete');
        Route::get('destroy/{id}', 'ImagenesProductoController@destroy')->name('destroy')->middleware('password.confirm');
        Route::get('restore/{id}', 'ImagenesProductoController@restore')->name('restore');
        Route::get('imagen/{id}', 'ImagenesProductoController@getImagen')->name('getImagen');
    });
    Route::prefix('mensajes')->name('mensajes.')->namespace('mensajes')->group(function (){
        //Mensajes de la Subasta
        Route::get('index', 'MensajesController@index')->name('index');
        Route::get('trash', 'MensajesController@trash')->name('trash');
        Route::get('create', 'MensajesController@create')->name('create');
        Route::post('guardar', 'MensajesController@store')->name('store');
        Route::get('mostrar/{id}', 'MensajesController@show')->name('show');
        Route::get('editar/{id}', 'MensajesController@edit')->name('edit');
        Route::put('actualizar/{id}', 'MensajesController@update')->name('update');
        Route::get('delete/{id}', 'MensajesController@delete')->name('delete');
        Route::get('destroy/{id}', 'MensajesController@destroy')->name('destroy')->middleware('password.confirm');
        Route::get('restore/{id}', 'MensajesController@restore')->name('restore');
    });
    Route::prefix('detallevehiculos')->name('detallevehiculos.')->namespace('detallevehiculos')->group(function (){
        //Detalle de Vehiculos
        Route::get('index', 'DetalleVehiculosController@index')->name('index');
        Route::get('trash', 'DetalleVehiculosController@trash')->name('trash');
        Route::get('create', 'DetalleVehiculosController@create')->name('create');
        Route::post('guardar', 'DetalleVehiculosController@store')->name('store');
        Route::get('mostrar/{id}', 'DetalleVehiculosController@show')->name('show');
        Route::get('editar/{id}', 'DetalleVehiculosController@edit')->name('edit');
        Route::put('actualizar/{id}', 'DetalleVehiculosController@update')->name('update');
        Route::get('delete/{id}', 'DetalleVehiculosController@delete')->name('delete');
        Route::get('destroy/{id}', 'DetalleVehiculosController@destroy')->name('destroy')->middleware('password.confirm');
        Route::get('restore/{id}', 'DetalleVehiculosController@restore')->name('restore');
    });
    Route::prefix('garantias')->name('garantias.')->namespace('garantias')->group(function (){
        //Garantias Entregadas
        Route::get('index', 'GarantiasController@index')->name('index');
        Route::get('trash', 'GarantiasController@trash')->name('trash');
        Route::get('create', 'GarantiasController@create')->name('create');
        Route::post('guardar', 'GarantiasController@store')->name('store');
        Route::get('mostrar/{id}', 'GarantiasController@show')->name('show');
        Route::get('editar/{id}', 'GarantiasController@edit')->name('edit');
        Route::put('actualizar/{id}', 'GarantiasController@update')->name('update');
        Route::get('delete/{id}', 'GarantiasController@delete')->name('delete');
        Route::get('destroy/{id}', 'GarantiasController@destroy')->name('destroy')->middleware('password.confirm');
        Route::get('restore/{id}', 'GarantiasController@restore')->name('restore');
    });
    Route::prefix('ranking')->name('ranking.')->namespace('ranking')->group(function (){
        //Ranking de Usuarios
        Route::get('index', 'RankingController@index')->name('index');
        Route::get('trash', 'RankingController@trash')->name('trash');
        Route::get('create', 'RankingController@create')->name('create');
        Route::post('guardar', 'RankingController@store')->name('store');
        Route::get('mostrar/{id}', 'RankingController@show')->name('show');
        Route::get('editar/{id}', 'RankingController@edit')->name('edit');
        Route::put('actualizar/{id}', 'RankingController@update')->name('update');
        Route::get('delete/{id}', 'RankingController@delete')->name('delete');
        Route::get('destroy/{id}', 'RankingController@destroy')->name('destroy')->middleware('password.confirm');
        Route::get('restore/{id}', 'RankingController@restore')->name('restore');
    });
    Route::prefix('activos')->name('activos.')->namespace('activos')->group(function (){
        //Detalle de Vehiculos
        Route::get('index', 'ActivosController@index')->name('index');
        Route::get('trash', 'ActivosController@trash')->name('trash');
        Route::get('create', 'ActivosController@create')->name('create');
        Route::post('guardar', 'ActivosController@store')->name('store');
        Route::get('mostrar/{id}', 'ActivosController@show')->name('show');
        Route::get('editar/{id}', 'ActivosController@edit')->name('edit');
        Route::put('actualizar/{id}', 'ActivosController@update')->name('update');
        Route::get('delete/{id}', 'ActivosController@delete')->name('delete');
        Route::get('destroy/{id}', 'ActivosController@destroy')->name('destroy')->middleware('password.confirm');
        Route::get('restore/{id}', 'ActivosController@restore')->name('restore');
    });
    Route::prefix('guardado')->name('guardado.')->namespace('guardado')->group(function (){
        //Vehiculos Guardado
        Route::get('index', 'GuardadoController@index')->name('index');
        Route::get('trash', 'GuardadoController@trash')->name('trash');
        Route::get('create', 'GuardadoController@create')->name('create');
        Route::post('guardar', 'GuardadoController@store')->name('store');
        Route::get('mostrar/{id}', 'GuardadoController@show')->name('show');
        Route::get('editar/{id}', 'GuardadoController@edit')->name('edit');
        Route::put('actualizar/{id}', 'GuardadoController@update')->name('update');
        Route::get('delete/{id}', 'GuardadoController@delete')->name('delete');
        Route::get('destroy/{id}', 'GuardadoController@destroy')->name('destroy')->middleware('password.confirm');
        Route::get('restore/{id}', 'GuardadoController@restore')->name('restore');
    });
    Route::prefix('documentos')->name('documentos.')->namespace('documentos')->group(function (){
        //Documentos
        Route::get('index', 'DocumentosController@index')->name('index');
        Route::get('trash', 'DocumentosController@trash')->name('trash');
        Route::get('create', 'DocumentosController@create')->name('create');
        Route::post('guardar', 'DocumentosController@store')->name('store');
        Route::get('mostrar/{id}', 'DocumentosController@show')->name('show');
        Route::get('editar/{id}', 'DocumentosController@edit')->name('edit');
        Route::put('actualizar/{id}', 'DocumentosController@update')->name('update');
        Route::get('delete/{id}', 'DocumentosController@delete')->name('delete');
        Route::get('destroy/{id}', 'DocumentosController@destroy')->name('destroy')->middleware('password.confirm');
        Route::get('restore/{id}', 'DocumentosController@restore')->name('restore');
        Route::get('/download/{id}/{file}', 'DocumentosController@getDownload')->name('descargar');
    });
    Route::prefix('participacion')->name('participacion.')->namespace('participacion')->group(function (){
        //Participaciones de usuarios
        Route::get('index', 'ParticipacionesController@index')->name('index');
        Route::get('trash', 'ParticipacionesController@trash')->name('trash');
        Route::get('create', 'ParticipacionesController@create')->name('create');
        Route::post('guardar', 'ParticipacionesController@store')->name('store');
        Route::get('mostrar/{id}', 'ParticipacionesController@show')->name('show');
        Route::get('editar/{id}', 'ParticipacionesController@edit')->name('edit');
        Route::put('actualizar/{id}', 'ParticipacionesController@update')->name('update');
        Route::get('delete/{id}', 'ParticipacionesController@delete')->name('delete');
        Route::get('destroy/{id}', 'ParticipacionesController@destroy')->name('destroy')->middleware('password.confirm');
        Route::get('restore/{id}', 'ParticipacionesController@restore')->name('restore');
    });
    Route::prefix('slide')->name('slide.')->namespace('slide')->group(function (){
        //Configuracion de Slide
        Route::get('index', 'slideController@index')->name('index');
        Route::get('trash', 'slideController@trash')->name('trash');
        Route::get('create', 'slideController@create')->name('create');
        Route::post('guardar', 'slideController@store')->name('store');
        Route::get('mostrar/{id}', 'slideController@show')->name('show');
        Route::get('editar/{id}', 'slideController@edit')->name('edit');
        Route::put('actualizar/{id}', 'slideController@update')->name('update');
        Route::get('delete/{id}', 'slideController@delete')->name('delete');
        Route::get('destroy/{id}', 'slideController@destroy')->name('destroy')->middleware('password.confirm');
        Route::get('restore/{id}', 'slideController@restore')->name('restore');
        Route::get('imagen/{id}', 'slideController@getImagen')->name('getImagen');
    });
});

// Rutas de Test
//Route::get('indextest', 'HomeController@test');
Route::get('consulta', 'HomeController@test')->name('consulta');
Route::view('showtest', 'test.show');
Route::view('livetest', 'test.live');
Route::view('testAjax', 'include._test');
if(env('APP_ENV') == 'local'){
    Route::get('email', function() {
        $data = [
            'nombre'    => 'pedro',
            'asunto'    => 'Asunto del Mensaje',
            'correo'    => 'Asesor.pedro@gmail.com',
            'mensaje'   => 'Hola Mundo',
        ];
        return new \App\Mail\contacto($data);
    });
}
if(env('APP_ENV') == 'local'){
    Route::get('reset', function() {
        $token = 1;
        return view('auth.passwords.reset', compact('token'));
    });
}

