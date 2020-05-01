<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('clientes')) {
            Schema::table('clientes', function (Blueprint $table) {
                if (!Schema::hasColumn('clientes', 'id')) {
                    $table->id();
                }
                if (!Schema::hasColumn('clientes', 'user_id')) {
                    $table->unsignedBigInteger('user_id');
                }
                if (!Schema::hasColumn('clientes', 'direccion_id')) {
                    $table->unsignedBigInteger('direccion_id');
                }
                if (!Schema::hasColumn('clientes', 'primer_nombre')) {
                    $table->string('primer_nombre');
                }
                if (!Schema::hasColumn('clientes', 'segundo_nombre')) {
                    $table->string('segundo_nombre')->nullable();
                }
                if (!Schema::hasColumn('clientes', 'primer_apellido')) {
                    $table->string('primer_apellido');
                }
                if (!Schema::hasColumn('clientes', 'segundo_apellido')) {
                    $table->string('segundo_apellido')->nullable();
                }
                if (!Schema::hasColumn('clientes', 'telefono')) {
                    $table->string('telefono')->unique();
                }
                if (!Schema::hasColumn('clientes', 'dni')) {
                    $table->integer('dni')->unique();
                }
                if (!Schema::hasColumn('clientes', 'digito')) {
                    $table->integer('digito');
                }
                if (!Schema::hasColumn('clientes', 'dni_frontal')) {
                    $table->string('dni_frontal')->nullable();
                }
                if (!Schema::hasColumn('clientes', 'dni_atras')) {
                    $table->string('dni_atras')->nullable();
                }
                if (!Schema::hasColumn('clientes', 'created_at')) {
                    $table->timestamps();
                }
                if (!Schema::hasColumn('clientes', 'updated_at')) {
                    $table->softDeletes();
                }
            });
        }else{
            Schema::create('clientes', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('user_id');
                $table->integer('direccion_id');
                $table->string('primer_nombre');
                $table->string('segundo_nombre')->nullable();
                $table->string('primer_apellido');
                $table->string('segundo_apellido')->nullable();
                $table->string('telefono')->unique();
                $table->integer('dni')->unique();
                $table->integer('digito');
                $table->string('dni_frontal')->nullable();
                $table->string('dni_atras')->nullable();
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

/*

*/



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
