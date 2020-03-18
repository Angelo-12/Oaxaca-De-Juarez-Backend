<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaCancelacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancelacion', function (Blueprint $table) {
            $table->increments('id_cancelacion');
            $table->integer('id_permiso');
            $table->timestamp('fecha_cancelacion');
            $table->string('motivo',30);
            $table->string('observaciones',255);

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
