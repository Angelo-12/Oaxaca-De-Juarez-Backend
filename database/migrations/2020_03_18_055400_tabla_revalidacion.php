<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaRevalidacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revalidacion', function (Blueprint $table) {
            $table->increments('id_revalidacion');
            $table->integer('id_permiso');
            $table->timestamp('fecha_revalidacion');
            $table->double('monto');

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
