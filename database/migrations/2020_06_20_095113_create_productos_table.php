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
			$table->increments('id');
			$table->Integer('user_id')->unsigned()->nullable();
			$table->Integer('lote_id')->unsigned()->nullable();
			$table->string('producto');
			$table->string('precio');
			$table->string('precio_reserva');
			$table->string('garantia');
			$table->string('puja');
			$table->string('comision');
            $table->dateTime('started_at')->nullable();
            $table->dateTime('finalized_at')->nullable();
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
