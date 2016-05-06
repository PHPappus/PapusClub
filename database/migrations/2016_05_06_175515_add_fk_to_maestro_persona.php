<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkToMaestroPersona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('persona', function (Blueprint $table) {
            $table->foreign('id_tipo_persona')->references('id_tipo_persona')->on('tipo_persona')->onDelete('cascade');
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
            $table->dropForeign('persona_id_tipo_persona_foreign');
        });
    }
}
