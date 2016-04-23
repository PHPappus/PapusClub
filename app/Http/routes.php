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
});*/
Route::get('/', 'FrontController@index');
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
Route::get('inicio-after-login','FrontController@inicio_after_login');
Route::get('registrar-ambiente-al','FrontController@registrar_ambiente_al');
Route::get('modificar-ambiente-al','FrontController@modificar_ambiente_al');
Route::get('registrar-concesionaria-al','FrontController@registrar_concesionaria_al');
Route::get('registrar-precio-pref-bungalows-al','FrontController@registrar_precio_pref_bungalows_al');
Route::get('registrar-nuevo-producto-al','FrontController@registrar_nuevo_producto_al');
Route::get('registrar-precio-especial-membresia-al','FrontController@registrar_precio_especial_membresia_al');
Route::get('registrar-precio-pref-bungalows-1-al','FrontController@registrar_precio_pref_bungalows_1_al');
Route::get('registrar-precio-especial-membresia-1-al','FrontController@registrar_precio_especial_membresia_1_al');
*/