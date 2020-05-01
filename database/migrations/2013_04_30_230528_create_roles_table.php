<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('roles')) {
            Schema::table('roles', function (Blueprint $table) {
                if (!Schema::hasColumn('roles', 'id')) {
                    $table->id();
                }
                if (!Schema::hasColumn('roles', 'nombre')) {
                    $table->string('nombre')->unique();
                }
                if (!Schema::hasColumn('roles', 'descripcion')) {
                    $table->text('descripcion')->nullable();
                }
                if (!Schema::hasColumn('roles', 'slug')) {
                    $table->string('slug')->unique();
                }
                if (!Schema::hasColumn('roles', 'creted_at')) {
                    $table->timestamps();
                }
                if (!Schema::hasColumn('roles', 'deleted_at')) {
                    $table->softDeletes();
                }
            });
        }else{
            Schema::create('roles', function (Blueprint $table) {
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
        Schema::dropIfExists('roles');
    }
}
