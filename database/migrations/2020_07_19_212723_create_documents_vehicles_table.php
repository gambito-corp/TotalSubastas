<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents_vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id');
            $table->foreignId('lot_id');
            $table->foreignId('producto_id');
            $table->string('titulo');
            $table->string('tipo');
            $table->string('documento');
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
        Schema::dropIfExists('documents_vehicles');
    }
}
