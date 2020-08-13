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
			$table->foreignId('producto_id')->nullable()->constrained('productos')->onDelete('set null');
			$table->foreignId('ganador_id')->nullable()->constrained('users')->onDelete('set null');
			$table->foreignId('segundo_id')->nullable()->constrained('users')->onDelete('set null');
			$table->foreignId('tercero_id')->nullable()->constrained('users')->onDelete('set null');
			$table->foreignId('cuarto_id')->nullable()->constrained('users')->onDelete('set null');
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
