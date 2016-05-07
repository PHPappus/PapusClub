<?php

namespace papusclub\Http\Controllers;

use Illuminate\Http\Request;
use papusclub\Proveedor;
use papusclub\Http\Requests;
use papusclub\Http\Requests\StoreProveedorRequest;

use DB;
class ProveedorController extends Controller
{
    //
    public function index() {
		return view('inicio');
	}	

	public function create()
    {
    	return view('registrar-proveedor-al');
    }
    
    public function InsertProveedor(StoreProveedorRequest $request)
    {    	
    	$input = $request->all();

    	$proveedor = DB::table('maestro_proveedor')->insert(
    		['nombreproveedor' => $input['nombreproveedor'],
    		'ruc' => $input['ruc'],
    		'direccion' => $input['direccion'],
    		'telefono' => $input['telefono'],
    		'correo' => $input['correo'],
    		'nombreresponsable' => $input['nombreresponsable'],
    		'estado' => $input['estado']
    		]
    		);
    	
        return back();
    }
	
	
    public function getRegistrarProveedor()
    {
    	$proveedor = DB::table('maestro_proveedor')->where('nombre_proveedor','Tio Amor');
    	$nombre_proveedor = $proveedor->value('nombre_proveedor');
    	$ruc = $proveedor->value('RUC');
        $direccion = $proveedor->value('direccion');
        $telefono = $proveedor->value('telefono');
        $correo = $proveedor->value('correo');
        $nombre_responsable = $proveedor->value('nombre_responsable');
        $estado = $proveedor->value('estado');


        return view('modificar-proveedor-al',
        	['nombre_proveedor'=>$nombre_proveedor,
        	 'ruc'=>$ruc,
        	 'direccion'=>$direccion,
        	 'telefono'=>$telefono,
        	 'correo'=>$correo,
        	 'nombre_responsable'=>$nombre_responsable,
        	 'estado'=>$estado
        	]);
    }
}
