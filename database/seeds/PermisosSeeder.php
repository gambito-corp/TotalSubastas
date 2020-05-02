<?php

use App\permisos;
use Illuminate\Database\Seeder;

class PermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permiso = new permisos();
        $permiso->nombre = "home_index";
        $permiso->descripcion = "Esto es un permiso de prueba para la aplicacion y asi probar los fallos en cascada, no ejecutar en la version de produccion";
        $permiso->slug = "HomeIndex";
        $permiso->save();

        $permiso = new permisos();
        $permiso->nombre = "home_create";
        $permiso->descripcion = "no ejecutar en la version de produccion";
        $permiso->slug = "HomeCreate";
        $permiso->save();

        $permiso = new permisos();
        $permiso->nombre = "home_store";
        $permiso->descripcion = "no ejecutar en la version de produccion";
        $permiso->slug = "HomeStore";
        $permiso->save();

        $permiso = new permisos();
        $permiso->nombre = "home_show";
        $permiso->descripcion = "no ejecutar en la version de produccion";
        $permiso->slug = "HomeShow";
        $permiso->save();

        $permiso = new permisos();
        $permiso->nombre = "home_edit";
        $permiso->descripcion = "no ejecutar en la version de produccion";
        $permiso->slug = "HomeEdit";
        $permiso->save();

        $permiso = new permisos();
        $permiso->nombre = "home_update";
        $permiso->descripcion = "no ejecutar en la version de produccion";
        $permiso->slug = "HomeUpdate";
        $permiso->save();

        $permiso = new permisos();
        $permiso->nombre = "home_delete";
        $permiso->descripcion = "no ejecutar en la version de produccion";
        $permiso->slug = "HomeDelete";
        $permiso->save();

        $permiso = new permisos();
        $permiso->nombre = "home_destroy";
        $permiso->descripcion = "no ejecutar en la version de produccion";
        $permiso->slug = "HomeDestroy";
        $permiso->save();






    }
}
