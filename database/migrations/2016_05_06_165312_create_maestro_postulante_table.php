<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaestroPostulanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulante',function(Blueprint $table){
            $table->engine = 'InnoDB';

            $table->bigInteger('id_postulante');
            $table->bigInteger('ruc');
            $table->string('lugar_nacimiento');            
            $table->string('nacionalidad');
            $table->string('carnet_extranjeria');            
            $table->string('estado_civil');
            $table->string('domicilio');            
            $table->string('distrito');
            $table->string('telefono_domicilio');
            $table->string('colegio_secundaria');
            $table->string('instruccion_superior');
            $table->string('especialidad');
            $table->string('profesion');
            $table->string('centro_trabajo');
            $table->string('cargo_centro_trabajo');
            $table->string('telefono_oficina');
            $table->integer('cantidad_hijos');
            $table->float('pago_inicial');
            $table->string('estado');

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
        Schema::drop('postulante');
    }
}
