<?php

use Illuminate\Database\Seeder;
use papusclub\Perfil;

class PerfilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Perfil::insert(['description'=>'SOCIO']);
        Perfil::insert(['description'=>'ADMINISTRADOR GENERAL']);
        Perfil::insert(['description'=>'ADMINISTRADOR DE PAGOS']);
        Perfil::insert(['description'=>'ADMINISTRADOR DE REGISTROS']);
        Perfil::insert(['description'=>'GERENTE']);
    }
}
