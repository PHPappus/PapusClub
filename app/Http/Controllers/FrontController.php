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
}
