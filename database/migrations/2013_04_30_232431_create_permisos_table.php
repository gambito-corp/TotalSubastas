<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('permisos')) {
            Schema::table('permisos', function (Blueprint $table) {
                if (!Schema::hasColumn('permisos', 'id')) {
                    $table->id();
                }
                if (!Schema::hasColumn('permisos', 'nombre')) {
                    $table->string('nombre')->unique();
                }
                if (!Schema::hasColumn('permisos', 'descripcion')) {
                    $table->text('descripcion')->nullable();
                }
                if (!Schema::hasColumn('permisos', 'slug')) {
                    $table->string('slug')->unique();
                }
                if (!Schema::hasColumn('permisos', 'creted_at')) {
                    $table->timestamps();
                }
                if (!Schema::hasColumn('permisos', 'deleted_at')) {
                    $table->softDeletes();
                }
            });
        }else{
            Schema::create('permisos', function (Blueprint $table) {
                $table->id();
                $table->string('nombre')->unique();
                $table->text('descripcion')->nullable();
                $table->string('slug')->unique();
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
        Schema::dropIfExists('permisos');
    }
}
