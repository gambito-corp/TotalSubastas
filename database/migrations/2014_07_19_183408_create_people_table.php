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
			$table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
			$table->foreignId('direccion_id')->nullable()->constrained('addresses')->onDelete('set null');
			$table->foreignId('banco_id')->nullable()->constrained('banks')->onDelete('set null');
			$table->string('nombres')->nullable()->default('test');
			$table->string('apellidos')->nullable()->default('test');
			$table->string('tipo_documento')->nullable()->default('test');
			$table->string('numero_documento')->nullable()->default('test');
			$table->string('digito_documento')->nullable()->default('test');
			$table->string('genero')->nullable()->default('test');
			$table->string('estado_civil')->nullable()->default('test');
			$table->string('cuenta_banco')->nullable()->default('Ingresa tu cuenta para abono aquí');
			$table->date('b_day')->nullable()->default(date('Y-m-d'));
			$table->string('telefono')->nullable()->default('test');
			$table->string('email')->nullable()->default('test');
			$table->tinyInteger('juridica')->nullable()->default('0');
			$table->string('dni_front')->nullable()->default('test');
			$table->string('dni_back')->nullable()->default('test');
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
