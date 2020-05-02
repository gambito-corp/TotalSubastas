<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteNaturalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('cliente_naturales')) {
            Schema::table('cliente_naturales', function (Blueprint $table) {
                if (!Schema::hasColumn('cliente_naturales', 'id')) {
                    $table->id();
                }
                if (!Schema::hasColumn('cliente_naturales', 'user_id')) {
                    $table->foreignId('user_id')
                        ->unsigned ()
                        ->constrained()
                        ->cascadeOnDelete();
                }
                if (!Schema::hasColumn('cliente_naturales', 'clientes_id')) {
                    $table->foreignId('clientes_id')
                        ->unsigned ()
                        ->constrained()
                        ->cascadeOnDelete();
                }
                if (!Schema::hasColumn('cliente_naturales', 'primer_nombre')) {
                    $table->string('primer_nombre');
                }
                if (!Schema::hasColumn('cliente_naturales', 'segundo_nombre')) {
                    $table->string('segundo_nombre')->nullable();
                }
                if (!Schema::hasColumn('cliente_naturales', 'primer_apellido')) {
                    $table->string('primer_apellido');
                }
                if (!Schema::hasColumn('cliente_naturales', 'segundo_apellido')) {
                    $table->string('segundo_apellido')->nullable();
                }
                if (!Schema::hasColumn('cliente_naturales', 'dni')) {
                    $table->integer('dni')->unique();
                }
                if (!Schema::hasColumn('cliente_naturales', 'digito')) {
                    $table->integer('digito');
                }
                if (!Schema::hasColumn('cliente_naturales', 'dni_frontal')) {
                    $table->string('dni_frontal')->nullable();
                }
                if (!Schema::hasColumn('cliente_naturales', 'dni_atras')) {
                    $table->string('dni_atras')->nullable();
                }
                if (!Schema::hasColumn('cliente_naturales', 'dni_validado')) {
                    $table->boolean('dni_validado')->nullable();
                }
                if (!Schema::hasColumn('cliente_naturales', 'created_at')) {
                    $table->timestamps();
                }
                if (!Schema::hasColumn('cliente_naturales', 'updated_at')) {
                    $table->softDeletes();
                }
            });
        }else{
            Schema::create('cliente_naturales', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')
                    ->unsigned ()
                    ->constrained()
                    ->cascadeOnDelete();
                $table->foreignId('clientes_id')
                    ->unsigned ()
                    ->constrained()
                    ->cascadeOnDelete();
                $table->string('primer_nombre');
                $table->string('segundo_nombre')->nullable();
                $table->string('primer_apellido');
                $table->string('segundo_apellido')->nullable();
                $table->integer('dni')->unique();
                $table->integer('digito');
                $table->string('dni_frontal')->nullable();
                $table->string('dni_atras')->nullable();
                $table->boolean('dni_validado')->nullable();
                $table->timestamp('dni_validado_at')->nullable();
                $table->timestamps();
                $table->softDeletes();
            });
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente_naturals');
    }
}
