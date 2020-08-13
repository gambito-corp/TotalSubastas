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
			$table->id();
			$table->foreignId('persona_juridica_id')->nullable()->constrained('legal_persons')->onDelete('set null');
			$table->foreignId('direccion_id')->nullable()->constrained('addresses')->onDelete('set null');
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
