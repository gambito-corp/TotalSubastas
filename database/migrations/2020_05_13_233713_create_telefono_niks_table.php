<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelefonoNiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('telefono_niks')) {
            Schema::table('telefono_niks', function (Blueprint $table) {
                if (!Schema::hasColumn('telefono_niks', 'id')) {
                    $table->id();
                }
                if (!Schema::hasColumn('telefono_niks', 'created_at')) {
                    $table->timestamps();
                }
                if (!Schema::hasColumn('telefono_niks', 'deleted_at')) {
                    $table->softdeletes();
                }
            });
        }else{
            Schema::create('telefono_niks', function (Blueprint $table) {
                $table->id();
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
        Schema::dropIfExists('telefono_niks');
    }
}
