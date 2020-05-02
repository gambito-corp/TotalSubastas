<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('direcciones')) {
            Schema::table('direcciones', function (Blueprint $table) {
                if (!Schema::hasColumn('direcciones', 'id')) {
                    $table->id();
                }
                if (!Schema::hasColumn('direcciones', 'user_id')) {
                    $table->foreignId('user_id')
                        -> unsigned ()
                        ->constrained()
                        ->cascadeOnDelete();
                }
                if (!Schema::hasColumn('direcciones', 'tipo_via')) {
                    $table->string('tipo_via')->nullable();
                }
                if (!Schema::hasColumn('direcciones', 'nombre_via')) {
                    $table->string('nombre_via')->nullable();
                }
                if (!Schema::hasColumn('direcciones', 'numero_via')) {
                    $table->string('numero_via')->nullable();
                }
                if (!Schema::hasColumn('direcciones', 'interior')) {
                    $table->boolean('interior')->nullable();
                }
                if (!Schema::hasColumn('direcciones', 'urbanizacion')) {
                    $table->string('urbanizacion')->nullable();
                }
                if (!Schema::hasColumn('direcciones', 'distrito')) {
                    $table->string('distrito')->nullable();
                }
                if (!Schema::hasColumn('direcciones', 'ciudad')) {
                    $table->string('ciudad')->nullable();
                }
                if (!Schema::hasColumn('direcciones', 'provincia')) {
                    $table->string('provincia')->nullable();
                }
                if (!Schema::hasColumn('direcciones', 'departamento')) {
                    $table->string('departamento')->nullable();
                }
                if (!Schema::hasColumn('direcciones', 'pais')) {
                    $table->string('pais')->nullable();
                }
                if (!Schema::hasColumn('direcciones', 'created_at')) {
                    $table->timestamps();
                }
                if (!Schema::hasColumn('direcciones', 'deleted_at')) {
                    $table->softDeletes();
                }
            });
        }else{
            Schema::create('direcciones', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')
                    -> unsigned ()
                    ->constrained()
                    ->cascadeOnDelete();
                $table->string('tipo_via')->nullable();
                $table->string('nombre_via')->nullable();
                $table->string('numero_via')->nullable();
                $table->boolean('interior')->nullable();
                $table->string('urbanizacion')->nullable();
                $table->string('distrito')->nullable();
                $table->string('ciudad')->nullable();
                $table->string('provincia')->nullable();
                $table->string('departamento')->nullable();
                $table->string('pais')->nullable();
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
        Schema::dropIfExists('direccions');
    }
}
