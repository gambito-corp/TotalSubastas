<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysTotalsubastas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('addresses', function (Blueprint $table) {
            $table->foreign('pais_id')
            ->references('id')->on('countries');
            $table->foreign('departamento_id')
            ->references('id')->on('departments');
            $table->foreign('provincia_id')
            ->references('id')->on('provinces');
            $table->foreign('distrito_id')
            ->references('id')->on('districts');
        });
        
        Schema::table('audits', function (Blueprint $table) {
            $table->foreign('user_id')
            ->references('id')->on('users');            
        });
        
        Schema::table('balances', function (Blueprint $table) {
            $table->foreign('user_id')
            ->references('id')->on('users');            
            $table->foreign('banco_id')
            ->references('id')->on('banks');            
        });
        
        Schema::table('companies', function (Blueprint $table) {
            $table->foreign('persona_juridica_id')
            ->references('id')->on('legal_persons');            
            $table->foreign('direccion_id')
            ->references('id')->on('addresses');            
        });
        
        Schema::table('departments', function (Blueprint $table) {
            $table->foreign('pais_id')
            ->references('id')->on('countries');            
        });
            
        Schema::table('districts', function (Blueprint $table) {
            $table->foreign('pais_id')
            ->references('id')->on('countries');            
            $table->foreign('departamento_id')
            ->references('id')->on('departments');            
            $table->foreign('provincia_id')
            ->references('id')->on('provinces');            
        });
            
        Schema::table('imagenes_vehiculos', function (Blueprint $table) {
            $table->foreign('user_id')
            ->references('id')->on('users');            
            $table->foreign('vehiculo_id')
            ->references('id')->on('vehicles');            
        });
            
        Schema::table('legal_persons', function (Blueprint $table) {
            $table->foreign('persona_id')
            ->references('id')->on('people');
            $table->foreign('banco_id')
            ->references('id')->on('banks'); 
            $table->foreign('direccion_id')
            ->references('id')->on('addresses');
            $table->foreign('direccion2_id')
            ->references('id')->on('addresses');
        });

        Schema::table('lots', function (Blueprint $table) {
            $table->foreign('user_id')
            ->references('id')->on('users');            
            $table->foreign('empresa_id')
            ->references('id')->on('companies');            
        });

        Schema::table('messages', function (Blueprint $table) {
            $table->foreign('user_id')
            ->references('id')->on('users');            
            $table->foreign('subasta_id')
            ->references('id')->on('auctions');            
        });

        Schema::table('people', function (Blueprint $table) {
            $table->foreign('user_id')
            ->references('id')->on('users');            
            $table->foreign('documento_id')
            ->references('id')->on('documents');
            $table->foreign('banco_id')
            ->references('id')->on('banks'); 
            $table->foreign('direccion_id')
            ->references('id')->on('addresses');
        });

        Schema::table('provinces', function (Blueprint $table) {
            $table->foreign('pais_id')
            ->references('id')->on('countries');            
            $table->foreign('departamento_id')
            ->references('id')->on('departments');                      
        });
        
        Schema::table('models', function (Blueprint $table) {
            $table->foreign('marca_id')
            ->references('id')->on('brands');            
        });
        
        Schema::table('vehicle_details', function (Blueprint $table) {
            $table->foreign('vehiculo_id')
            ->references('id')->on('vehicles');
        });
        
        Schema::table('vehicles', function (Blueprint $table) {
            $table->foreign('user_id')
            ->references('id')->on('users');            
            $table->foreign('lote_id')
            ->references('id')->on('lots');            
            $table->foreign('marca_id')
            ->references('id')->on('brands');            
            $table->foreign('modelo_id')
            ->references('id')->on('models');            
        });

        Schema::table('warehouses', function (Blueprint $table) {
            $table->foreign('company_id')
            ->references('id')->on('companies');
            $table->foreign('direccion_id')
            ->references('id')->on('addresses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
