<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvatarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('avatars')) {
            Schema::table('avatars', function (Blueprint $table) {
                if (!Schema::hasColumn('avatars', 'id')) {
                    $table->id();
                }
                if (!Schema::hasColumn('avatars', 'user_id')) {
                    $table->foreignId('user_id')
                        -> unsigned ()
                        ->constrained()
                        ->cascadeOnDelete();
                }
                if (!Schema::hasColumn('avatars', 'nombre')) {
                    $table->string('nombre')->unique();
                }
                if (!Schema::hasColumn('avatars', 'descripcion')) {
                    $table->text('descripcion')->nullable();
                }
                if (!Schema::hasColumn('avatars', 'slug')) {
                    $table->string('slug')->unique();
                }
                if (!Schema::hasColumn('avatars', 'created_at')) {
                    $table->timestamps();
                }
                if (!Schema::hasColumn('avatars', 'deleted_at')) {
                    $table->softDeletes();
                }
            });
        }else{
            Schema::create('avatars', function (Blueprint $table) {
                $table->id();
                $table->foreignId('User_id')
                    ->unsigned ()
                    ->constrained()
                    ->cascadeOnDelete();
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
        Schema::dropIfExists('avatars');
    }
}
