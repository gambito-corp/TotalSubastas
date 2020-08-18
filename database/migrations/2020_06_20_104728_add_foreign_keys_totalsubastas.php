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
        //Usuario
        Schema::table('users', function (Blueprint $table){
            $table->foreign('role_id')
                ->references('id')->on('rols');
        });
        //Marcas
        Schema::table('brands', function (Blueprint $table){
            $table->foreign('parent_id')
                ->references('id')->on('brands');
        });
        //Direcciones
        Schema::table('addresses', function (Blueprint $table) {
            $table->foreign('user_id')
                ->references('id')->on('users');
            $table->foreign('pais_id')
                ->references('id')->on('countries');
            $table->foreign('departamento_id')
                ->references('id')->on('countries');
            $table->foreign('provincia_id')
                ->references('id')->on('countries');
            $table->foreign('distrito_id')
                ->references('id')->on('countries');
        });
        //Ganadores
        Schema::table('auctions', function (Blueprint $table){
            $table->foreign('producto_id')
                ->references('id')->on('productos');
            $table->foreign('ganador_id')
                ->references('id')->on('users');
            $table->foreign('segundo_id')
                ->references('id')->on('users');
            $table->foreign('tercero_id')
                ->references('id')->on('users');
            $table->foreign('cuarto_id')
                ->references('id')->on('users');
        });
        // Auditorias de Login
        Schema::table('audits', function (Blueprint $table) {
            $table->foreign('user_id')
                ->references('id')->on('users');
        });
        //balances
        Schema::table('balances', function (Blueprint $table) {
            $table->foreign('user_id')
                ->references('id')->on('users');
            $table->foreign('banco_id')
                ->references('id')->on('banks');
        });
        //Empresas
        Schema::table('companies', function (Blueprint $table) {
            $table->foreign('persona_juridica_id')
                ->references('id')->on('legal_persons');
            $table->foreign('direccion_id')
                ->references('id')->on('addresses');
        });
        //Paises y parent
        Schema::table('countries', function (Blueprint $table) {
            $table->foreign('parent_id')
                ->references('id')->on('countries');
        });
        //Imagenes de Vehiculos
        Schema::table('imagenes_vehiculos', function (Blueprint $table) {
            $table->foreign('empresa_id')
                ->references('id')->on('companies');
            $table->foreign('lote_id')
                ->references('id')->on('lots');
            $table->foreign('producto_id')
                ->references('id')->on('productos');
        });
        //persona Juridica
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
        //Lotes
        Schema::table('lots', function (Blueprint $table) {
            $table->foreign('empresa_id')
                ->references('id')->on('companies');
        });
        // Mensajes de Subasta
        Schema::table('messages', function (Blueprint $table) {
            $table->foreign('user_id')
                ->references('id')->on('users');
            $table->foreign('producto_id')
                ->references('id')->on('productos');
        });
        //Persona natural
        Schema::table('people', function (Blueprint $table) {
            $table->foreign('user_id')
                ->references('id')->on('users');
            $table->foreign('banco_id')
                ->references('id')->on('banks');
            $table->foreign('direccion_id')
                ->references('id')->on('addresses');
        });
        //Productos de subasta
        Schema::table('productos', function (Blueprint $table) {
            $table->foreign('user_id')
                ->references('id')->on('users');
            $table->foreign('empresa_id')
                ->references('id')->on('companies');
            $table->foreign('lote_id')
                ->references('id')->on('lots');
        });
        //Descripcion del vehiculo
        Schema::table('vehicle_details', function (Blueprint $table) {
            $table->foreign('empresa_id')
                ->references('id')->on('companies');
            $table->foreign('lote_id')
                ->references('id')->on('lots');
            $table->foreign('producto_id')
                ->references('id')->on('productos');
            $table->foreign('marca_id')
                ->references('id')->on('brands');
            $table->foreign('modelo_id')
                ->references('id')->on('brands');
        });
        //Almacenes
        Schema::table('warehouses', function (Blueprint $table) {
            $table->foreign('empresa_id')
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
        Schema::disableForeignKeyConstraints();
        //Usuario
        Schema::table('users', function (Blueprint $table){
            $table->dropColumn('role_id');
        });
        //Marcas
        Schema::table('brands', function (Blueprint $table){
            $table->dropColumn('parent_id');
        });
        //Direcciones
        Schema::table('addresses', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropColumn('pais_id');
            $table->dropColumn('departamento_id');
            $table->dropColumn('provincia_id');
            $table->dropColumn('distrito_id');
        });
        //Ganadores
        Schema::table('auctions', function (Blueprint $table){
            $table->dropColumn('producto_id');
            $table->dropColumn('ganador_id');
            $table->dropColumn('segundo_id');
            $table->dropColumn('tercero_id');
            $table->dropColumn('cuarto_id');
        });
        // Auditorias de Login
        Schema::table('audits', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
        //balances
        Schema::table('balances', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropColumn('banco_id');
        });
        //Empresas
        Schema::table('companies', function (Blueprint $table) {
            $table->dropColumn('persona_juridica_id');
            $table->dropColumn('direccion_id');
        });
        //Paises y parent
        Schema::table('countries', function (Blueprint $table) {
            $table->dropColumn('parent_id');
        });
        //Imagenes de Vehiculos
        Schema::table('imagenes_vehiculos', function (Blueprint $table) {
            $table->dropColumn('empresa_id');
            $table->dropColumn('lote_id');
            $table->dropColumn('producto_id');
        });
        //persona Juridica
        Schema::table('legal_persons', function (Blueprint $table) {
            $table->dropColumn('persona_id');
            $table->dropColumn('banco_id');
            $table->dropColumn('direccion_id');
            $table->dropColumn('direccion2_id');
        });
        //Lotes
        Schema::table('lots', function (Blueprint $table) {
            $table->dropColumn('empresa_id');
        });
        // Mensajes de Subasta
        Schema::table('messages', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropColumn('producto_id');
        });
        //Persona natural
        Schema::table('people', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropColumn('banco_id');
            $table->dropColumn('direccion_id');
        });
        //Productos de subasta
        Schema::table('productos', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropColumn('empresa_id');
            $table->dropColumn('lote_id');
        });
        //Descripcion del vehiculo
        Schema::table('vehicle_details', function (Blueprint $table) {
            $table->dropColumn('empresa_id');
            $table->dropColumn('lote_id');
            $table->dropColumn('producto_id');
            $table->dropColumn('marca_id');
            $table->dropColumn('modelo_id');
        });
        //Almacenes
        Schema::table('warehouses', function (Blueprint $table) {
            $table->dropColumn('empresa_id');
            $table->dropColumn('direccion_id');
        });

        Schema::enableForeignKeyConstraints();
    }
}
