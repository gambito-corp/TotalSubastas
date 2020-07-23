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
			$table->foreignId('producto_id')->constrained('productos');
			$table->foreignId('ganador_id')->nullable()->constrained('users');
			$table->foreignId('segundo_id')->nullable()->constrained('users');
			$table->foreignId('tercero_id')->nullable()->constrained('users');
			$table->foreignId('cuarto_id')->nullable()->constrained('users');
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
