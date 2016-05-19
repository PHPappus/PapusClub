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

/*Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',

]);*/

/*Route::get('/', function () {
    return view('welcome');
});*/
/*Route::get('login2', 'FrontController@login2');*/
Route::get('/', 'FrontController@home');
/*
Route::get('/{nombre}', function ($nombre) {
     return view($nombre);
});*/

Route::resource('usuario','UsuarioController');

Route::resource('log','LogController');
Route::get('logout','LogController@logout');


//Socio
Route::group(['middleware' => ['auth', 'socio']], function () {
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
});



//Administrados de registros
Route::group(['middleware' => ['auth', 'adminregistros']], function () {
	Route::resource('admin-registros','AdminRegistrosController');
	Route::get('cuenta-ar','AdminRegistrosController@cuenta');
	Route::get('ambientes-ar','AdminRegistrosController@ambientes');
	Route::get('registrar-ambiente','AdminRegistrosController@registrar');
	Route::get('modificar-ambiente','AdminRegistrosController@modificar');
});

//Gerente
Route::group(['middleware' => ['auth', 'gerente']], function () {
	Route::resource('gerente','GerenteController');
	Route::get('cuenta-g','GerenteController@cuenta');
});

//Administrados de pagos
Route::group(['middleware' => ['auth', 'adminpagos']], function () {
	Route::resource('admin-pagos','AdminPagosController');
	Route::get('cuenta-ap','AdminPagosController@cuenta');
});


//Administrador general
Route::group(['middleware' => ['auth', 'admingeneral']], function () {
	Route::resource('admin-general','AdminGeneralController');
	Route::get('cuenta-a','AdminGeneralController@cuenta');
	Route::get('postulante-al-admin','AdminGeneralController@postulante');
	//MANTENIMIENTO DE SEDES
	Route::get('sedes/index', 'SedesController@index');
	Route::get('sedes/new', 'SedesController@create');
	Route::post('sedes/new/sede', 'SedesController@store');
	Route::get('sedes/{id}', 'SedesController@edit');
	Route::post('sedes/{id}/edit', 'SedesController@update');
	Route::get('sedes/{id}/delete', 'SedesController@destroy');
	Route::get('sedes/{id}/show', 'SedesController@show');
});

/*Route::get('sede-a','SedesController@index');
Route::get('newsede-a','SedesController@create');
Route::get('editsede-a','SedesController@edit');
*/


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





Route::get('token',function(){
    return csrf_token();
});


Route::auth();

Route::get('/home', 'HomeController@index');
