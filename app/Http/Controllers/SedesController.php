<?php

namespace papusclub\Http\Controllers;
use Illuminate\Http\Request;
use papusclub\Http\Requests;

use papusclub\Sede;
use papusclub\Http\Requests\StoreSedeRequest;
use papusclub\Http\Requests\EditSedeRequest;


class SedesController extends Controller
{
    public function index()
    {
    	$sedes = Sede::all();
    	return view('internal.admin.sedes.index', compact('sedes'));
    }

    public function create()
    {
    	return view('internal.admin.sedes.newSede');
    }

    public function store(StoreSedeRequest $request)
    {
    	$input = $request->all();

    	$sede = new Sede();
    	$sede->nombre = $input['nombre'];
    	$sede->capacidad = $input['capacidad'];
    	$sede->direccion = $input['direccion'];
    	$sede->distrito = $input['distrito'];
    	$sede->provincia = $input['provincia'];
    	$sede->departamento = $input['departamento'];

    	$sede->save();
    	return back();
    	//return $request->all();	
    }

    public function edit($id)
    {
        $sede = Sede::find($id);
        return view('internal.admin.sedes.editSede', compact('sede'));
    }

    public function update(EditSedeRequest $request, $id)
    {
        $input = $request->all();
        $sede = Sede::find($id);

        $sede->nombre = $input['nombre'];
        $sede->capacidad = $input['capacidad'];
        $sede->direccion = $input['direccion'];
        $sede->distrito = $input['distrito'];
        $sede->provincia = $input['provincia'];
        $sede->departamento = $input['departamento'];

        $sede->save();
        return back();

    }

    public function destroy($id)    
    {
        $sede = Sede::find($id);
        //falta ver lo de las relaciones
        $sede->delete();
        return back();
    }
}
