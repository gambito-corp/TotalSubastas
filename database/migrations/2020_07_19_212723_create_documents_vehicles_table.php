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
            $table->foreignId('empresa_id')->nullable()->constrained('companies')->onDelete('set null');
            $table->foreignId('lote_id')->nullable()->constrained('lots')->onDelete('set null');
            $table->foreignId('producto_id')->nullable()->constrained()->onDelete('set null');
            $table->string('titulo1');
            $table->string('documento1');
            $table->string('titulo2')->nullable();
            $table->string('documento2')->nullable();
            $table->string('titulo3')->nullable();
            $table->string('documento3')->nullable();
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
