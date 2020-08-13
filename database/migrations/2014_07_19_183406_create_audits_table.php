<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAuditsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('audits', function(Blueprint $table)
		{
			$table->id();
			$table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
			$table->string('ip')->nullable();
			$table->string('tipo_dispositivo')->nullable();
			$table->string('tipo_so')->nullable();
			$table->string('navegador')->nullable();
			$table->string('version')->nullable();
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
		Schema::drop('audits');
	}

}
