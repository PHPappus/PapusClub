<?php

namespace papusclub\Http\Controllers;

use Illuminate\Http\Request;

use papusclub\Http\Requests;
use papusclub\Models\Sede;
use papusclub\Http\Requests\StoreSedeRequest;
use papusclub\Http\Requests\EditSedeRequest;


class SedesController extends Controller
{
    //Muestra la lista de sedes que se encuentran en BD, estas se pueden modificar, cambiar el estado, ver mas detalle o registrar una nueva sede
    public function index()
    {
        $sedes = Sede::all();
        return view('admin-general.sede.index', compact('sedes'));
    }

    //Muestra el formulario para poder registrar una nueva sede en BD
    public function create()
    {
        return view('admin-general.sede.newSede');
    }

    //Se almacena la nueva sede que se ha registrado en la BD
    public function store(StoreSedeRequest $request)
    {
        $input = $request->all();

        $sede = new Sede();
        $sede->nombre = $input['nombre'];
        $sede->telefono = $input['telefono'];
        $sede->departamento = $input['departamento'];
        $sede->provincia = $input['provincia'];
        $sede->distrito = $input['distrito'];
        $sede->direccion = $input['direccion'];
        $sede->referencia = $input['referencia'];
        $sede->nombre_contacto = $input['nombre_contacto'];
        $sede->capacidad_maxima = $input['capacidad_maxima'];
        $sede->capacidad_socio = $input['capacidad_socio'];
        $sede->estado = true;

        $sede->save();
        return back();
    
    }

    //Muestra el formulario para poder modificar una sede
    public function edit($id)
    {
        $sede = Sede::find($id);
        return view('admin-general.sede.editSede', compact('sede'));
    }

    //Se guarda la informacion modificada de la sede en la BD
    public function update(EditSedeRequest $request, $id)
    {
        $input = $request->all();
        $sede = Sede::find($id);

        $sede->nombre = $input['nombre'];
        $sede->telefono = $input['telefono'];
        $sede->departamento = $input['departamento'];
        $sede->provincia = $input['provincia'];
        $sede->distrito = $input['distrito'];
        $sede->direccion = $input['direccion'];
        $sede->referencia = $input['referencia'];
        $sede->nombre_contacto = $input['nombre_contacto'];
        $sede->capacidad_maxima = $input['capacidad_maxima'];
        $sede->capacidad_socio = $input['capacidad_socio'];
        
        if($request['estado']==null){
            $sede->estado = false;
        }
        else {
            $sede->estado = true;    
        }

        $sede->save();
        return back();

    }

    //Se cambia el estado de una sede a inactiva
    public function destroy($id)    
    {
        $sede = Sede::find($id);
        $sede->estado = false;
        $sede->save();
        return back();
    }

    //Se brinda informacion mas detallada de la sede
    public function show($id)
    {
        $sede = Sede::find($id);
        return view('admin-general.sede.detailSede', compact('sede'));
    }
}
