<?php

use Illuminate\Database\Seeder;
use papusclub\Models\Sede;

class SedeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sede::insert(['nombre' => 'Callao', 
        	'telefono' => '964247239', 
        	'departamento' => 'Lima', 
        	'provincia' => 'Callao', 
        	'distrito' => 'La Punta', 
        	'direccion' => 'Av. Grau 457', 
        	'referencia' => 'Alt. Comisaria La Punta', 
        	'nombre_contacto' => 'Francisco Beingolea', 
        	'capacidad_maxima' => 10000, 
        	'capacidad_socio' => 50, 
        	'estado' => true 
        	]);
    }
}
