<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAuctionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('auctions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('vehiculo_id')->unsigned();
			$table->integer('ganador_id')->unsigned()->nullable();
			$table->integer('segundo_id')->unsigned()->nullable();
			$table->integer('tercero_id')->unsigned()->nullable();
			$table->integer('cuarto_id')->unsigned()->nullable();
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
		Schema::drop('auctions');
	}

}
