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
                    $table->text('descripcion');
                }
                if (!Schema::hasColumn('permisos', 'slug')) {
                    $table->string('slug')->unique();
                }
                if (!Schema::hasColumn('permisos', 'created_at')) {
                    $table->timestamps();
                }
                if (!Schema::hasColumn('permisos', 'deleted_at')) {
                    $table->softdeletes();
                }
            });
        }else{
            Schema::create('permisos', function (Blueprint $table) {
                $table->id();
                $table->string('nombre')->unique();
                $table->text('descripcion');
                $table->string('slug')->unique();
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
        Schema::dropIfExists('permisos');
    }
}
