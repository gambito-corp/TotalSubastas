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
			$table->id();
			$table->unsignedBigInteger('producto_id');
			$table->unsignedBigInteger('ganador_id')->nullable();
			$table->unsignedBigInteger('segundo_id')->nullable();
			$table->unsignedBigInteger('tercero_id')->nullable();
			$table->unsignedBigInteger('cuarto_id')->nullable();
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
