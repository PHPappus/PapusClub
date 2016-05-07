<?php

namespace papusclub\Http\Controllers;

use Illuminate\Http\Request;

use papusclub\Http\Requests;
use papusclub\Postulante;
use papusclub\Http\Requests\StorePostulanteRequest;


class PostulanteController extends Controller
{
    public function index()
    {
    	$sedes = Sede::all();
    	return view('admin-general.sede.index', compact('sedes'));
    }

    public function create()
    {
    	return view('admin-general.sede.newSede');
    }

    public function store(StorePostulanteRequest $request)
    {
    	$input = $request->all();

    	$postulante = new Postulante();
    	

    	$postulante->save();
    	return back();
    	//return $request->all();	
    }

    public function edit($id)
    {
        $sede = Sede::find($id);
        return view('admin-general.sede.editSede', compact('sede'));
    }

    public function destroy($id)    
    {
        $sede = Sede::find($id);
        //falta ver lo de las relaciones
        $sede->delete();
        return back();
    }
}
