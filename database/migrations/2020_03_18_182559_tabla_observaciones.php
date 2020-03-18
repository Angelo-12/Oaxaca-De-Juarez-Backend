<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaObservaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('observaciones', function (Blueprint $table) {
            $table->increments('id_observaciones');
            $table->string('nombre',30);
            $table->string('ap_paterno',30);
            $table->string('ap_materno',30);
            $table->string('correo',30);
            $table->text('motivo');
            $table->date('fecha');
            $table->integer('id_calle');
            $table->integer('id_tipo');
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
