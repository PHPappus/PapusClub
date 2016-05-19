<?php

namespace papusclub\Models;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    protected $table = 'sedes';
    protected $fillable = 
    ['nombre', 
    'telefono', 
    'departamento', 
    'provincia', 
    'distrito', 
    'direccion', 
    'referencia',  
    'nombre_contacto', 
    'capacidad_maxima',
    'capacidad_socio'
    ];
}
