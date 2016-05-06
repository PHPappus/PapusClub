<?php

namespace papusclub\Http\Controllers;
<<<<<<< HEAD

use Illuminate\Http\Request;

use papusclub\Http\Requests;
=======
use Illuminate\Http\Request;
use papusclub\Http\Requests;

>>>>>>> 22d1da32d2c1433e0fdc29c0422699297048180b
use papusclub\Sede;
use papusclub\Http\Requests\StoreSedeRequest;
use papusclub\Http\Requests\EditSedeRequest;


class SedesController extends Controller
{
    public function index()
    {
    	$sedes = Sede::all();
<<<<<<< HEAD
    	return view('admin-general.sede.index', compact('sedes'));
=======
    	return view('internal.admin.sedes.index', compact('sedes'));
>>>>>>> 22d1da32d2c1433e0fdc29c0422699297048180b
    }

    public function create()
    {
<<<<<<< HEAD
    	return view('admin-general.sede.newSede');
=======
    	return view('internal.admin.sedes.newSede');
>>>>>>> 22d1da32d2c1433e0fdc29c0422699297048180b
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
<<<<<<< HEAD
        return view('admin-general.sede.editSede', compact('sede'));
=======
        return view('internal.admin.sedes.editSede', compact('sede'));
>>>>>>> 22d1da32d2c1433e0fdc29c0422699297048180b
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
