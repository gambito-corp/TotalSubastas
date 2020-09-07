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
			$table->id();
			$table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');
			$table->foreignId('banco_id')->nullable()->constrained('banks')->onDelete('set null');
			$table->foreignId('direccion_id')->nullable()->constrained('addresses')->onDelete('set null');
			$table->foreignId('direccion2_id')->nullable()->constrained('addresses')->onDelete('set null');
			$table->string('nombre');
			$table->string('razon_social');
			$table->string('ruc');
			$table->string('numero_cuenta')->nullable();
			$table->string('telefono');
			$table->string('email');
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
