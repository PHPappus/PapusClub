<?php

namespace papusclub\Http\Requests;

use papusclub\Http\Requests\Request;

class StoreSedeRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'          =>  'required|max:100',
            'apellido'        =>  'required|max:100',
            'tipoDoc'         =>  'required|max:100',
            'docId'           =>  'integer|max:20',
            'fechaNac'        =>  'required|max:100',
            'estadoCiv'       =>   'required|max:20',
            'lugarNac'        =>  'required|max:100',
            'nacionalidad'    =>  'required|max:100',
            'direccion'       =>  'required|max:100',
            'telefono'        =>   'integer|max:12',
            'celular'         =>   'integer|max:14',
            'correo'          =>   'required|max:50',
            'nivelIns'        =>   'required|max:30', 
            'colegio'         =>    'required|max:100',
            'carrera'         =>    'required|max:50',
            'centroTrabajo'   =>    'required|max:100',
            'dirTrab'         =>    'required|max:100',
            'telfTrab'        =>   'integer|max:12',
            'cargo'          =>    'required|max:100',
            'nombCon'        =>     'required|max:100',
            'apCon'          =>     'required|max:100',
            'tDocCon'        =>     'required|max:100',
            'docCon'         =>     'integer|max:20',
            'fechaNacCon'    =>   'required|max:100', 
            'estCivCon'      =>     'required|max:20',
            'nombP'         =>      'required|max:100',
            'apP'           =>      'required|max:100',
            'tDocP'          =>      'required|max:100',
            'docP'          =>      'integer|max:20',
            'fechaNacP'     =>      'required|max:100',
            'estCivP'       =>       'required|max:20',
            'nombM'         =>       'required|max:100',
            'apM'           =>        'required|max:100',
            'tDocM'         =>        'required|max:100',
            'docM'          =>       'integer|max:20',
            'fechaNacM'     =>      'required|max:100',
            'estCivM'       =>      'required|max:20',
        ];
    }
}

?>