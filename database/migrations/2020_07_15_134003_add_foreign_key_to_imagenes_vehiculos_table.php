<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToImagenesVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('imagenes_vehiculos', function (Blueprint $table) {
            $table->foreign('producto_id')
                ->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('imagenes_vehiculos', function (Blueprint $table) {
            //
        });
    }
}
