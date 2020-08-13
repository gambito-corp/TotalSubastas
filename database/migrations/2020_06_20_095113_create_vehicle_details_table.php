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
            $table->id();
            $table->foreignId('empresa_id')->nullable()->constrained('companies')->onDelete('set null');
            $table->foreignId('lote_id')->nullable()->constrained('lots')->onDelete('set null');
            $table->foreignId('producto_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('marca_id')->nullable()->constrained('brands')->onDelete('set null');
            $table->foreignId('modelo_id')->nullable()->constrained('brands')->onDelete('set null');
            $table->string('year')->nullable();
            $table->string('placa')->nullable();
            $table->string('color')->nullable();
            $table->string('version')->nullable();
            $table->string('ubicacion')->nullable();
            $table->string('timon')->nullable();
            $table->string('asientos')->nullable();
            $table->text('estado_vehiculo', 65535)->nullable();
            $table->string('ficha_tecnica')->nullable();
            $table->text('informacion', 65535)->nullable();
            $table->string('direccion')->nullable();
            $table->string('video')->nullable();
            $table->string('video_url')->nullable();
            $table->string('valor_interno_activo')->nullable();
            $table->string('saneado')->nullable();
            $table->string('captura')->nullable();
            $table->string('seguro')->nullable();
            $table->string('soat')->nullable();
            $table->string('rtv')->nullable();
            $table->text('terminos', 65535)->nullable();
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
            $table->string('kilometraje')->nullable();
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
