<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaCalle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calle', function (Blueprint $table) {
            $table->increments('id_calle');
            $table->string('nombre',50);
            $table->integer('puestos_maximos');
            $table->integer('id_colonia');
            $table->integer('id_zona');
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
