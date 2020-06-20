<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('addresses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('pais_id')->unsigned();
			$table->integer('departamento_id')->unsigned();
			$table->integer('provincia_id')->unsigned();
			$table->integer('distrito_id')->unsigned();
			$table->string('tipo_via')->nullable();
			$table->string('direccion1')->nullable();
			$table->string('direccion2')->nullable();
			$table->string('numero')->nullable();
			$table->string('int_ext')->nullable();
			$table->string('referencia')->nullable();
			$table->string('titulo_direccion')->nullable();
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
		Schema::drop('addresses');
	}

}
