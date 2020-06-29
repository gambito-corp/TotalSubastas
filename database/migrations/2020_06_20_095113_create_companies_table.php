<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompaniesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('companies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('persona_juridica_id')->unsigned();
			$table->integer('direccion_id')->unsigned()->nullable();
			$table->string('nombre')->nullable();
			$table->string('razon_social')->nullable();
			$table->string('ruc')->nullable();
			$table->string('telefono')->nullable();
			$table->string('email')->nullable();
			$table->text('informacion', 65535)->nullable();
			$table->string('imagen')->nullable();
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
		Schema::drop('companies');
	}

}
