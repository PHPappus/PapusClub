<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona',function(Blueprint $table){

            $table->bigInteger('id_persona');
            $table->string('nombre');            
            $table->string('ap_paterno');
            $table->string('ap_materno');            
            $table->timestamp('fecha_nacimiento');
            $table->string('correo');            
            $table->string('id_tipo_persona');
            $table->integer('id_usuario');

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
    }
}
