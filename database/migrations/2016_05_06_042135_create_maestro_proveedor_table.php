<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaestroProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Maestro_Proveedor',function (Blueprint $table){
            //Estos son los atributos que estaban en el caso de uso
            $table->increments('id_proveedor');
            $table->string('nombreproveedor');
            $table->biginteger('ruc');
            $table->integer('telefono');
            $table->string('correo');
            $table->string('direccion');
			$table->string('nombreresponsable');
            $table->tinyint('estado');            
            $table->integer('id_tipo_proveedor');//Esta dentro de la tabla de configuracion
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('Maestro_Proveedor');
    }
}
