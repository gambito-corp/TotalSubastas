<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutorizacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('autorizaciones')) {
            Schema::table('autorizaciones', function (Blueprint $table) {
                if (!Schema::hasColumn('autorizaciones', 'id')) {
                    $table->id();
                }
                if (!Schema::hasColumn('autorizaciones', 'nombre')) {
                    $table->string('nombre')->unique();
                }

                if (!Schema::hasColumn('autorizaciones', 'descripcion')) {
                    $table->text('descripcion');
                }
                if (!Schema::hasColumn('autorizaciones', 'slug')) {
                    $table->string('slug')->unique();
                }
                if (!Schema::hasColumn('autorizaciones', 'created_at')) {
                    $table->timestamps();
                }
                if (!Schema::hasColumn('autorizaciones', 'deleted_at')) {
                    $table->softdeletes();
                }
            });
        }else{
            Schema::create('autorizaciones', function (Blueprint $table) {
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
        Schema::dropIfExists('autorizacions');
    }
}
