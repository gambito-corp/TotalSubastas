<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePeopleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('people', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('documento_id')->unsigned();
			$table->integer('direccion_id')->unsigned();
			$table->integer('banco_id')->unsigned();
			$table->string('nombres')->nullable();
			$table->string('apellidos')->nullable();
			$table->string('numero_documento')->nullable();
			$table->string('digito_documento')->nullable();
			$table->string('genero')->nullable();
			$table->string('estado_civil')->nullable();
			$table->string('cuenta_banco')->nullable();
			$table->date('b_day')->nullable();
			$table->string('telefono')->nullable();
			$table->string('email')->nullable();
			$table->string('dni_front')->nullable();
			$table->string('dni_back')->nullable();
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
		Schema::drop('people');
	}

}
