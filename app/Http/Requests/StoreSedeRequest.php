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
            'direccion'       =>  'required|max:100',
            'distrito'      =>  'required|max:100',
            'provincia'      =>  'required|max:100',
            'departamento'         =>  'required|max:100',
            'capacidad'      =>  'integer|min:1',
            
        ];
    }
}
