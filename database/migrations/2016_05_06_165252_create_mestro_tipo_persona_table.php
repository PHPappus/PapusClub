<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMestroTipoPersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tipo_persona',function(Blueprint $table){

            $table->engine = 'InnoDB';

            $table->integer('id_tipo_persona')->unique();
            $table->string('descripcion');
            $table->timestamp('fecha_actualizacion');

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
        Schema::drop('tipo_persona');
    }
}
