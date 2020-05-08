<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccesosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('accesos')) {
            Schema::table('accesos', function (Blueprint $table) {
                if (!Schema::hasColumn('accesos', 'id')) {
                    $table->id();
                }
                if (!Schema::hasColumn('accesos', 'rol_id')) {
                    $table->unsignedBigInteger('rol_id')->constrained();
                    $table->foreign('rol_id')->references('id')->on('roles');
                }
                if (!Schema::hasColumn('accesos', 'autorizacion_id')) {
                    $table->unsignedBigInteger('autorizacion_id')->constrained();
                    $table->foreign('autorizacion_id')->references('id')->on('autorizaciones');
                }
                if (!Schema::hasColumn('accesos', 'permiso_id')) {
                    $table->unsignedBigInteger('permiso_id')->constrained();
                    $table->foreign('permiso_id')->references('id')->on('permisos');
                }
                if (!Schema::hasColumn('accesos', 'created_at')) {
                    $table->timestamps();
                }
                if (!Schema::hasColumn('accesos', 'deleted_at')) {
                    $table->softdeletes();
                }
            });
        }else{
            Schema::create('accesos', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('rol_id')->constrained();
                $table->foreign('rol_id')->references('id')->on('roles');
                $table->unsignedBigInteger('autorizacion_id')->constrained();
                    $table->foreign('autorizacion_id')->references('id')->on('autorizaciones');
                $table->unsignedBigInteger('permiso_id')->constrained();
                $table->foreign('permiso_id')->references('id')->on('permisos');
                $table->timestamps();
                $table->softdeletes();
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
        Schema::dropIfExists('accesos');
    }
}
