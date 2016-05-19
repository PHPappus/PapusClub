<?php

use Illuminate\Database\Seeder;
use papusclub\User;

class TestUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    User::insert([ 'name' => 'Juan Perez' , 'email' => 'socio@mail.com', 'perfil_id'=>1,
	    			   'password' => bcrypt('123456')]);//Perfil Socio
	    User::insert([ 'name' => 'Juan Perez' , 'email' => 'adming@mail.com', 'perfil_id'=>2,
	    			   'password' => bcrypt('123456')]);//Perfil Administrador General
	    User::insert([ 'name' => 'Juan Perez' , 'email' => 'adminp@mail.com', 'perfil_id'=>3,
	    			   'password' => bcrypt('123456')]);//Perfil Administrador de Pagos
	    User::insert([ 'name' => 'Juan Perez' , 'email' => 'adminr@mail.com', 'perfil_id'=>4,
	    			   'password' => bcrypt('123456')]);//Perfil Administrador de Registros
	    User::insert([ 'name' => 'Juan Perez' , 'email' => 'gerente@mail.com', 'perfil_id'=>5,
	    			   'password' => bcrypt('123456')]);//Perfil Gerente   
    }
}
