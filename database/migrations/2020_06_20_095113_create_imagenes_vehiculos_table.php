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
			$table->foreignId('empresa_id')->nullable()->constrained('companies')->onDelete('set null');
			$table->foreignId('lote_id')->nullable()->constrained('lots')->onDelete('set null');
			$table->foreignId('producto_id')->nullable()->constrained()->onDelete('set null');
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
