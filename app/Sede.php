<?php

namespace papusclub;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    protected $fillable = ['nombre', 'direccion', 'distrito', 'provincia', 'departamento', 'capacidad'];
}
