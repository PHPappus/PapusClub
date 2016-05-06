<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaestroPersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('persona',function(Blueprint $table){

            $table->engine = 'InnoDB';

            $table->bigInteger('id_persona')->unique();
            $table->string('nombre');       
            $table->string('ap_paterno');
            $table->string('ap_materno');            
            $table->timestamp('fecha_nacimiento');
            $table->string('correo');            
            $table->integer('id_tipo_persona');
            $table->integer('id_usuario');

            $table->timestamps();

            $table->softDeletes();
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
        Schema::drop('persona');
    }
}
