<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('users')) {
            Schema::table('users', function (Blueprint $table) {
                if (!Schema::hasColumn('user', 'id')) {
                    $table->id();
                }
                if (!Schema::hasColumn('user', 'roles_id')) {
                    $table->foreignId('roles_id')
                        ->nullable()
                        ->constrained()
                        ->cascadeOnDelete();
                }
                if (!Schema::hasColumn('user', 'username')) {
                    $table->string('username')->unique();
                }
                if (!Schema::hasColumn('user', 'email')) {
                    $table->string('email')->unique();
                }

                if (!Schema::hasColumn('user', 'telefono')) {
                    $table->string('telefono')->unique()->nullable();
                }

                if (!Schema::hasColumn('user', 'email_verified_at')) {
                    $table->timestamp('email_verified_at')->nullable();
                }

                if (!Schema::hasColumn('user', 'telefono_verified_at')) {
                    $table->timestamp('telefono_verified_at')->nullable();
                }

                if (!Schema::hasColumn('user', 'password')) {
                    $table->string('password');
                }

                if (!Schema::hasColumn('user', 'remember_token')) {
                    $table->rememberToken();
                }

                if (!Schema::hasColumn('user', 'created_at')) {
                    $table->timestamps();
                }

                if (!Schema::hasColumn('user', 'deleted_at')) {
                    $table->softDeletes();
                }
            });
        }else{
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->foreignId('roles_id')
                    ->nullable()
                    ->constrained()
                    ->cascadeOnDelete();
                $table->string('username')->unique();
                $table->string('email')->unique();
                $table->string('telefono')->unique()->nullable();
                $table->timestamp('email_verified_at')->nullable();
                $table->timestamp('telefono_verified_at')->nullable();
                $table->string('password');
                $table->rememberToken();
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
        Schema::dropIfExists('user');
    }
}
