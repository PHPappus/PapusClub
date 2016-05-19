<?php

namespace papusclub;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    public function users()
    {
        return $this->hasMany('papusclub\User', 'perfil_id', 'id');
    }
}
