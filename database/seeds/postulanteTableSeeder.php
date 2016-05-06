<?php

use Illuminate\Database\Seeder;

class postulanteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('postulante')->insert([
    		'educacion' => 'primaria'
    		]);
    }
}
