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
            'nombre'          =>  'required|max:100|string',
            'telefono'       =>  'required|max:12|string',
            'departamento'       =>  'required|max:100|string',
            'provincia'      =>  'required|max:100|string',
            'distrito'      =>  'required|max:100|string',
            'direccion'         =>  'required|max:100|string',
            'referencia'         =>  'required|max:100|string',
            'nombre_contacto'         =>  'required|max:100|string',
            'capacidad_maxima'      =>  'integer|min:1',
            'capacidad_socio'      =>  'integer|min:1',
                        
        ];
    }
}
