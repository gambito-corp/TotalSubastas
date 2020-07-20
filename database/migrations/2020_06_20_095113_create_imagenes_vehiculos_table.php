<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImagenesVehiculosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('imagenes_vehiculos', function(Blueprint $table)
		{
			$table->id();
			$table->unsignedBigInteger('empresa_id');
			$table->unsignedBigInteger('lote_id');
			$table->unsignedBigInteger('producto_id');
			$table->string('imagen');
			$table->string('titulo')->nullable();
			$table->text('descripcion', 65535)->nullable();
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
		Schema::drop('imagenes_vehiculos');
	}

}
