<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name'=>'Juan Perez',
        	'email'=>'jperez@papusclub.com',
        	'password'=>bcrypt('123456'),
        	'type'=>'socio',       	
        	]);

         DB::table('users')->insert([
        	'name'=>'Jorge Gonzales',
        	'email'=>'jgonzales@papusclub.com',
        	'password'=>bcrypt('123456'),
        	'type'=>'admin-p',       	
        	]);

         DB::table('users')->insert([
        	'name'=>'Raul Chavez',
        	'email'=>'rchavez@papusclub.com',
        	'password'=>bcrypt('123456'),
        	'type'=>'gerente',       	
        	]);

        DB::table('users')->insert([
        	'name'=>'Carlos Rodriguez',
        	'email'=>'crodriguez@papusclub.com',
        	'password'=>bcrypt('123456'),
        	'type'=>'admin-p',       	
        	]);

        DB::table('users')->insert([
        	'name'=>'Roberto Quispe',
        	'email'=>'rquispe@papusclub.com',
        	'password'=>bcrypt('123456'),
        	'type'=>'admin-g',       	
        	]);

        DB::table('users')->insert([
        	'name'=>'Administrador Registros',
        	'email'=>'aregistros@papusclub.com',
        	'password'=>bcrypt('123456'),
        	'type'=>'admin-r',       	
        	]);       	       
    }
}
