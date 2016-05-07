<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'ProveedorController@index');
});
Route::get('login', 'FrontController@login');
Route::get('/', 'FrontController@index');
/*
Route::get('/{nombre}', function ($nombre) {
     return view($nombre);
});*/

Route::resource('usuario','UsuarioController');

Route::resource('log','LogController');
Route::get('logout','LogController@logout');


//Socio
Route::resource('socio','SocioController');
Route::get('cuenta-s','SocioController@cuenta');
Route::get('ambientes-s','SocioController@ambientes');
Route::get('anular-reserva-ambiente-s','SocioController@anularReservaAmbiente');
Route::get('anular-reserva-ambiente-b-s','SocioController@anularReservaAmbienteB');
Route::get('pagos-s','SocioController@pagos');
	//Socio.talleres
Route::get('talleres-s','SocioController@talleres');
Route::get('futbol-s','SocioController@futbol');
	//Socio.bungalows
Route::get('bungalows-s','SocioController@bungalow');
Route::get('reserva-bungalows-s','SocioController@bungalowReserva');
Route::get('reserva-bungalows-b-s','SocioController@bungalowReservaB');


Route::get('/modificar-proveedor-al','ProveedorController@getRegistrarProveedor');

//Administrados de registros
Route::resource('admin-registros','AdminRegistrosController');
Route::get('ambientes-ar','AdminRegistrosController@ambientes');
Route::get('registrar-ambiente','AdminRegistrosController@registrar');
Route::get('modificar-ambiente','AdminRegistrosController@modificar');

//Gerente
Route::resource('gerente','GerenteController');

//Administrados de pagos
Route::resource('admin-pagos','AdminPagosController');

//Administrador general
Route::resource('admin-general','AdminGeneralController');
/*Route::get('sede-a','SedesController@index');
Route::get('newsede-a','SedesController@create');
Route::get('editsede-a','SedesController@edit');
*/
Route::get('sedes/index', 'SedesController@index');
Route::get('sedes/new', 'SedesController@create');
Route::post('sedes/new/sede', 'SedesController@store');
Route::get('sedes/{id}', 'SedesController@edit');
Route::post('sedes/{id}/edit', 'SedesController@update');
Route::get('sedes/{id}/delete', 'SedesController@destroy');


Route::get('registrar-proveedor-al', 'ProveedorController@Create');
Route::post('registrar-proveedor-al/nuevo', 'ProveedorController@InsertProveedor');
//Route::get('/modificar-proveedor-0-al','ProveedorController@confirmar_registro_ambiente');

Route::get('/{nombre}', function ($nombre) {
     return view($nombre);
});

/*
Route::get('/', 'FrontController@index');
Route::get('login', 'FrontController@login');
Route::get('futbol', 'FrontController@futbol');
Route::get('historia-papusclub', 'FrontController@historia_papusclub');
Route::get('historia-papusclub-ver-mas', 'FrontController@historia_papusclub_ver_mas');
Route::get('historia-sede-callao', 'FrontController@historia_sede_callao');
Route::get('historia-sede-callao-ver-mas', 'FrontController@historia_sede_callao_ver_mas');
Route::get('reserva-bungalow', 'FrontController@reserva_bungalow');
Route::get('reserva-bungalow-busqueda', 'FrontController@reserva_bungalow_busqueda');
Route::get('registrar-concesionaria-al','FrontController@registrar_concesionaria_al');
Route::get('registrar-precio-pref-bungalows-al','FrontController@registrar_precio_pref_bungalows_al');
Route::get('registrar-nuevo-producto-al','FrontController@registrar_nuevo_producto_al');
Route::get('registrar-precio-especial-membresia-al','FrontController@registrar_precio_especial_membresia_al');
Route::get('registrar-precio-pref-bungalows-1-al','FrontController@registrar_precio_pref_bungalows_1_al');
Route::get('registrar-precio-especial-membresia-1-al','FrontController@registrar_precio_especial_membresia_1_al');
