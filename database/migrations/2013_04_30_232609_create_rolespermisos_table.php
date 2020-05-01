<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolespermisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('roles_permisos')) {
            Schema::table('roles_permisos', function (Blueprint $table) {
                if (!Schema::hasColumn('roles_permisos', 'id')) {
                    $table->id();
                }
                if (!Schema::hasColumn('roles_permisos', 'roles_id')) {
                    $table->foreignId('roles_id')
                        ->nullable()
                        ->constrained()
                        ->cascadeOnDelete();
                }
                if (!Schema::hasColumn('roles_permisos', 'permisos_id')) {
                    $table->foreignId('permisos_id')
                        ->nullable()
                        ->constrained()
                        ->cascadeOnDelete();
                }
                if (!Schema::hasColumn('roles_permisos', 'creted_at')) {
                    $table->timestamps();
                }
                if (!Schema::hasColumn('roles_permisos', 'deleted_at')) {
                    $table->softDeletes();
                }
            });
        }else{
            Schema::create('roles_permisos', function (Blueprint $table) {
                $table->id();
                $table->foreignId('roles_id')
                    ->nullable()
                    ->constrained()
                    ->cascadeOnDelete();
                $table->foreignId('permisos_id')
                    ->nullable()
                    ->constrained()
                    ->cascadeOnDelete();
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
        Schema::dropIfExists('roles_permisos');
    }
}
