<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaProvisionales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provisionales', function (Blueprint $table) {
            $table->increments('id_provisionales');
            $table->float('largo');
            $table->float('ancho');
            $table->string('utensilios',30);
            $table->date('fecha_vencimiento');
            $table->integer('id_permiso');
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
