<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaPermisos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permiso', function (Blueprint $table) {
            $table->increments('id_permiso');
            $table->integer('id_calle');
            $table->integer('numero_cuenta');
            $table->integer('numero_expediente');
            $table->timestamp('fecha_registro');
            $table->string('tipo_actividad',30);
            $table->string('giro',30);
            $table->double('latitud');
            $table->double('longitud');
            $table->string('dias_laborados',70);
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->text('detalles');

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
