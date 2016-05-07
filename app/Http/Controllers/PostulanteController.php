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
    	$sedes = Postulante::all();
    	return view('registrar-postulante', compact('postulante'));
    }

    public function create()
    {
    	return view('registrar-postulante');
    }

    public function store(StorePostulanteRequest $request)
    {
    	$input = $request->all();

    	$postulante = new Postulante();
    	$postulante->nombre = $input['nombre'];
    	$postulante->apellido = $input['apellido'];
    	$postulante->tipoDoc = $input['tipoDoc'];
    	$postulante->docId = $input['docId'];
    	$postulante->fechaNac = $input['fechaNac'];
    	$postulante->estadoCiv = $input['estadoCiv'];
    	$postulante->lugarNac = $input['lugarNac'];
    	$postulante->nacionalidad = $input['nacionalidad'];
    	$postulante->direccion = $input['direccion'];
    	$postulante->telefono = $input['telefono'];
    	$postulante->celular = $input['celular'];
    	$postulante->correo = $input['correo'];
    	$postulante->nivelIns = $input['nivelIns'];
    	$postulante->colegio = $input['colegio'];
    	$postulante->carrera = $input['carrera'];
    	$postulante->centroTrabajo = $input['centroTrabajo'];
    	$postulante->dirTrab = $input['dirTrab'];
    	$postulante->telfTrab = $input['telfTrab'];
    	$postulante->cargo = $input['cargo'];
    	$postulante->nombCon = $input['nombCon'];
    	$postulante->apCon = $input['apCon'];
    	$postulante->tDocCon = $input['tDocCon'];
    	$postulante->docCon = $input['docCon'];
    	$postulante->fechaNacCon = $input['fechaNacCon'];
    	$postulante->estCivCon = $input['estCivCon'];
    	$postulante->nombP = $input['nombP'];
    	$postulante->apP = $input['apP'];
    	$postulante->tDocP = $input['tDocP'];
    	$postulante->docP = $input['docP'];
    	$postulante->fechaNacP = $input['fechaNacP'];
    	$postulante->estCivP = $input['estCivP'];
    	$postulante->nombM = $input['nombM'];
    	$postulante->apM = $input['apM'];
    	$postulante->tDocM = $input['tDocM'];
    	$postulante->docM = $input['docM'];
    	$postulante->fechaNacM = $input['fechaNacM'];
    	$postulante->estCivM = $input['estCivM'];

    	$postulante->save();
    	return back();
    	//return $request->all();	
    }

}
