<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVehiclesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vehicles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('lote_id')->unsigned();
			$table->integer('marca_id')->unsigned();
			$table->integer('modelo_id')->unsigned();
			$table->year('year')->nullable();
			$table->string('nombre')->nullable();
			$table->string('placa')->nullable();
			$table->string('color')->nullable();
			$table->string('version')->nullable();
			$table->string('timon')->nullable();
			$table->string('asientos')->nullable();
			$table->string('estado_vehiculo')->nullable();
			$table->text('ficha_tecnica', 65535)->nullable();
			$table->text('informacion', 65535)->nullable();
			$table->string('direccion')->nullable();
			$table->string('video')->nullable();
			$table->string('video_url')->nullable();
			$table->string('valor_interno_activo')->nullable();
			$table->string('saneado')->nullable();
			$table->string('captura')->nullable();
			$table->string('seguro')->nullable();
			$table->string('soat')->nullable();
			$table->string('rtv')->nullable();
			$table->string('terminos')->nullable();
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
		Schema::drop('vehicles');
	}

}
