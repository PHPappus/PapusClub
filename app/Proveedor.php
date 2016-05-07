<?php

namespace papusclub;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{    

    protected $fillable = ['nombreproveedor', 'ruc', 'direccion', 'telefono', 'correo','nombreresponsable', 'estado'];
}
