<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaestroFuncionalidadXMaestroPerfilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MaestroFuncionalidadXMaestroPerfil',function( Blueprint $table){
            $table->integer('id_funcionalidad');
            $table->integer('id_perfil');
            $table->timestamps();

            //$table->primary(array('id_funcionalidad','id_perfil'));
        });
        DB::unprepared('ALTER TABLE `MaestroFuncionalidadXMaestroPerfil` ADD PRIMARY KEY (  `id_funcionalidad` ,  `id_perfil` )');

        Schema::table('MaestroFuncionalidadXMaestroPerfil',function(Blueprint $table){
            $table->foreign('id_funcionalidad')->references('id_funcionalidad')->on('Maestro_Funcionalidad');
            $table->foreign('id_perfil')->references('id_perfil')->on('Maestro_Perfil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('MaestroFuncionalidadXMaestroPerfil');
    }
}
