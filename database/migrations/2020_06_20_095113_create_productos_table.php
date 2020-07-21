<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productos', function(Blueprint $table)
		{
			$table->id();
			$table->unsignedBigInteger('user_id')->nullable();
			$table->unsignedBigInteger('empresa_id');
			$table->unsignedBigInteger('lote_id');
			$table->string('ciudad');
            $table->string('tipo_vehiculo');
            $table->string('tipo_subasta');
            $table->string('tipo_reserva');
			$table->string('nombre');
			$table->string('imagen')->default('img/vehiculos/coche.png');
			$table->BigInteger('precio');
			$table->BigInteger('precio_reserva');
			$table->BigInteger('garantia');
			$table->BigInteger('puja');
			$table->BigInteger('comision');
            $table->dateTime('started_at');
            $table->dateTime('finalized_at');
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
		Schema::drop('productos');
	}

}
