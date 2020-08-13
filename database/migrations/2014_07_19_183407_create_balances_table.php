<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBalancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('balances', function(Blueprint $table)
		{
			$table->id();
			$table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
			$table->foreignId('banco_id')->nullable()->constrained('banks')->onDelete('set null');
			$table->string('monto', 50)->nullable();
			$table->string('tipo')->nullable();
			$table->text('descripcion', 65535)->nullable();
			$table->string('boucher')->nullable();
			$table->string('motivo')->nullable();
			$table->string('cuenta')->nullable();
			$table->string('transaccion_banco')->nullable();
			$table->dateTime('abono_at')->nullable();
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
		Schema::drop('balances');
	}

}
