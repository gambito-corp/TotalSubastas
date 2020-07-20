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
			$table->id();
			$table->unsignedBigInteger('user_id');
			$table->unsignedBigInteger('direccion_id')->nullable();
			$table->unsignedBigInteger('banco_id')->nullable();
			$table->string('nombres')->nullable();
			$table->string('apellidos')->nullable();
			$table->string('tipo_documento')->nullable();
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
