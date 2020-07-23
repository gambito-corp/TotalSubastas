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
            $table->foreignId('empresa_id')->constrained('companies');
            $table->foreignId('lote_id')->constrained('lots');
            $table->foreignId('producto_id')->constrained();
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
