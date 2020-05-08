<?php

use App\Permiso;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $Permiso = new Permiso();
        $Permiso->nombre = "Index";
        $Permiso->descripcion = "Este es el permiso de acceso al metodo index del controlador Especificado en la tabla autorizaciones";
        $Permiso->slug = "index";
        $Permiso->save();

        $Permiso = new Permiso();
        $Permiso->nombre = "trash";
        $Permiso->descripcion = "Este es el permiso de acceso al metodo trash del controlador especificado en la tabla autorizaciones";
        $Permiso->slug = "trash";
        $Permiso->save();

        $Permiso = new Permiso();
        $Permiso->nombre = "create";
        $Permiso->descripcion = "Este es el permiso de acceso al metodo create del controlador especificado en la tabla autorizaciones";
        $Permiso->slug = "create";
        $Permiso->save();

        $Permiso = new Permiso();
        $Permiso->nombre = "store";
        $Permiso->descripcion = "Este es el permiso de acceso al metodo store del controlador especificado en la tabla autorizaciones";
        $Permiso->slug = "store";
        $Permiso->save();

        $Permiso = new Permiso();
        $Permiso->nombre = "show";
        $Permiso->descripcion = "Este es el permiso de acceso al metodo show del controlador especificado en la tabla autorizaciones";
        $Permiso->slug = "show";
        $Permiso->save();

        $Permiso = new Permiso();
        $Permiso->nombre = "edit";
        $Permiso->descripcion = "Este es el permiso de acceso al metodo edit del controlador especificado en la tabla autorizaciones";
        $Permiso->slug = "edit";
        $Permiso->save();

        $Permiso = new Permiso();
        $Permiso->nombre = "update";
        $Permiso->descripcion = "Este es el permiso de acceso al metodo update del controlador especificado en la tabla autorizaciones";
        $Permiso->slug = "update";
        $Permiso->save();

        $Permiso = new Permiso();
        $Permiso->nombre = "delete";
        $Permiso->descripcion = "Este es el permiso de acceso al metodo delete del controlador especificado en la tabla autorizaciones";
        $Permiso->slug = "delete";
        $Permiso->save();

        $Permiso = new Permiso();
        $Permiso->nombre = "restore";
        $Permiso->descripcion = "Este es el permiso de acceso al metodo restore del controlador especificado en la tabla autorizaciones";
        $Permiso->slug = "restore";
        $Permiso->save();

        $Permiso = new Permiso();
        $Permiso->nombre = "destroy";
        $Permiso->descripcion = "Este es el permiso de acceso al metodo destroy del controlador especificado en la tabla autorizaciones";
        $Permiso->slug = "destroy";
        $Permiso->save();
    }
}
