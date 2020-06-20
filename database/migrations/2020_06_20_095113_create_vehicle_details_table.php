<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVehicleDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vehicle_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('vehiculo_id')->unsigned();
			$table->string('combustible')->nullable();
			$table->string('traccion')->nullable();
			$table->string('torque')->nullable();
			$table->string('potencia')->nullable();
			$table->string('cilindrada')->nullable();
			$table->string('velocidades')->nullable();
			$table->string('trasmision')->nullable();
			$table->string('puertas')->nullable();
			$table->string('freno_delantero')->nullable();
			$table->string('freno_trasero')->nullable();
			$table->string('tipo_freno')->nullable();
			$table->string('am_fm')->nullable();
			$table->string('cd')->nullable();
			$table->string('sd')->nullable();
			$table->string('aux')->nullable();
			$table->string('usb')->nullable();
			$table->string('bluetooth')->nullable();
			$table->string('neumaticos')->nullable();
			$table->string('tapizado')->nullable();
			$table->string('airbag')->nullable();
			$table->string('alarma')->nullable();
			$table->string('aros')->nullable();
			$table->string('neblineros')->nullable();
			$table->string('lunas')->nullable();
			$table->string('gps')->nullable();
			$table->string('sensores')->nullable();
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
		Schema::drop('vehicle_details');
	}

}
