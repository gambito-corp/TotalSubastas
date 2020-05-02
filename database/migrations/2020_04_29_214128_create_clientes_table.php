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
                    $table->foreignId('user_id')
                        ->unsigned ()
                        ->constrained()
                        ->cascadeOnDelete();
                }
                if (!Schema::hasColumn('clientes', 'avatar_id')) {
                    $table->foreignId('avatar_id')
                        ->unsigned ()
                        ->constrained()
                        ->cascadeOnDelete();
                }
                if (!Schema::hasColumn('clientes', 'direcciones_id')) {
                    $table->foreignId('direcciones_id')
                        ->nullable()
                        ->unsigned ()
                        ->constrained()
                        ->onDelete('SET NULL');
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
                $table->foreignId('user_id')
                        ->unsigned ()
                        ->constrained()
                        ->cascadeOnDelete();
                $table->foreignId('avatar_id')
                        ->unsigned ()
                        ->constrained()
                        ->cascadeOnDelete();
                $table->foreignId('direcciones_id')
                    ->nullable()
                        ->unsigned ()
                        ->constrained()
                        ->onDelete('SET NULL');
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

