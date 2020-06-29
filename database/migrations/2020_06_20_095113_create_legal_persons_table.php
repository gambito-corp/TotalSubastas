<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLegalPersonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('legal_persons', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('persona_id')->unsigned();
			$table->integer('banco_id')->unsigned()->nullable();
			$table->integer('direccion_id')->unsigned()->nullable();
			$table->integer('direccion2_id')->unsigned()->nullable();
			$table->string('nombre')->nullable();
			$table->string('razon_social')->nullable();
			$table->string('ruc')->nullable();
			$table->string('numero_cuenta')->nullable();
			$table->string('telefono')->nullable();
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
		Schema::drop('legal_persons');
	}

}
