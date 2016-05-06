<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;
class tipo_personaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Seeder de maestro tipo Persona
        DB::table('tipo_persona')->insert([
            'id_tipo_persona' => '1',
            'descripcion' => 'trabajador',
            'fecha_actualizacion' => Carbon::today(),
        ]);


        DB::table('tipo_persona')->insert([
            'id_tipo_persona' => '2',
            'descripcion' => 'postulante',
            'fecha_actualizacion' => Carbon::today(),
        ]);


        DB::table('tipo_persona')->insert([
            'id_tipo_persona' => '3',
            'descripcion' => 'tercero',
            'fecha_actualizacion' => Carbon::today(),
        ]);
    }
}
