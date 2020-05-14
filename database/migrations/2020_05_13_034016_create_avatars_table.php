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
                if (!Schema::hasColumn('avatars', 'created_at')) {
                    $table->timestamps();
                }
                if (!Schema::hasColumn('avatars', 'deleted_at')) {
                    $table->softdeletes();
                }
            });
        }else{
            Schema::create('avatares', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id');
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
        Schema::dropIfExists('avatars');
    }
}
