<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Rol;
use Carbon\Carbon;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = new Rol();
        $rol->nombre = "Superadministrador";
        $rol->descripcion = "Este es el Rol de Superadministrador creado desde el seeder para funciones de prueba sobre fallos de cascada, no ejecutar en la version de produccion";
        $rol->slug = "root";
        $rol->save();

        $rol = new Rol();
        $rol->nombre = "Administrador";
        $rol->descripcion = "Este es el Rol de Administrador creado desde el seeder para funciones de prueba sobre fallos de cascada, no ejecutar en la version de produccion";
        $rol->slug = "admin";
        $rol->save();

        $rol = new Rol();
        $rol->nombre = "Editor";
        $rol->descripcion = "Este es el Rol de Editor creado desde el seeder para funciones de prueba sobre fallos de cascada, no ejecutar en la version de produccion";
        $rol->slug = "editor";
        $rol->save();

        $rol = new Rol();
        $rol->nombre = "User";
        $rol->descripcion = "Este es el Rol de User creado desde el seeder para funciones de prueba sobre fallos de cascada, no ejecutar en la version de produccion";
        $rol->slug = "user";
        $rol->save();
    }
}
