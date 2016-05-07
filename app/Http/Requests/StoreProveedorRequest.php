<?php

namespace papusclub\Http\Requests;

use papusclub\Http\Requests\Request;

class StoreProveedorRequest extends Request
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
            'nombreproveedor'   =>  'required|string|max:255',
            'ruc'               =>  'required|numeric',            
            'direccion'         =>  'required|string|max:255',
            'telefono'          =>  'required|numeric',
            'correo'            =>  'required|string|max:255',            
            'nombreresponsable' =>  'required|string|max:255',
            'estado'            =>  'required|integer'
        ];
    }
}
