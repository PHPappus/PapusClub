<?php

namespace papusclub\Http\Controllers;

use Illuminate\Http\Request;

use papusclub\Http\Requests;

class FrontController extends Controller
{
	public function index() {
		return view('inicio');
	}
    public function login() {
    	return view('login');
    }
    public function futbol() {
    	return view('futbol');
    }
    public function historia_papusclub() {
    	return view('historia-papusclub');
    }
    public function historia_papusclub_ver_mas(){
    	return view('historia-papusclub-ver-mas');
    }
    public function historia_sede_callao() {
    	return view('historia-sede-callao');
    }
    public function historia_sede_callao_ver_mas() {
    	return view('historia-sede-callao-ver-mas');
    }
    public function reserva_bungalow(){
    	return view('reserva-bungalow');
    }
    public function reserva_bungalow_busqueda(){
    	return view('reserva-bungalow-busqueda');
    }
    public function inicio_after_login(){
        return view('inicio-after-login');
    }
    public function registrar_ambiente_al(){
        return view('registrar-ambiente-al');
    }
    public function modificar_ambiente_al(){
        return view('modificar-ambiente-al');
    }
    public function registrar_concesionaria_al(){
        return view('registrar-concesionaria-al');
    }
    public function registrar_precio_pref_bungalows_al(){
        return view('registrar-precio-pref-bungalows-al');
    }
    public function registrar_nuevo_producto_al(){
        return view('registrar-nuevo-producto-al');
    }
    public function registrar_precio_especial_membresia_al(){
        return view('registrar-precio-especial-membresia-al');
    }
    public function registrar_precio_pref_bungalows_1_al(){
        return view('registrar-precio-pref-bungalows-1-al');
    }

}
