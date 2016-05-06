<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkToMaestroPostulante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('postulante', function (Blueprint $table) {
            $table->foreign('id_postulante')->references('id_persona')->on('persona')->onDelete('cascade');
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
        Schema::table('postulante', function (Blueprint $table) {
            $table->dropForeign('postulante_id_postulante_foreign');
        });
    }
}
