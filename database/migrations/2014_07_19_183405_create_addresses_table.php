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
			$table->id();
			$table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
			$table->foreignId('pais_id')->nullable()->constrained('countries')->onDelete('set null');
			$table->foreignId('departamento_id')->nullable()->constrained('countries')->onDelete('set null');
			$table->foreignId('provincia_id')->nullable()->constrained('countries')->onDelete('set null');
			$table->foreignId('distrito_id')->nullable()->constrained('countries')->onDelete('set null');
			$table->string('tipo_via');
			$table->string('direccion1');
			$table->string('direccion2')->nullable();
			$table->string('numero');
			$table->string('int_ext')->nullable();
			$table->string('referencia')->nullable();
			$table->string('titulo_direccion');
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
		Schema::dropIfExists('addresses');
	}

}
