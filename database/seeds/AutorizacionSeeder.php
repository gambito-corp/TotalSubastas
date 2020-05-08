<?php

use App\Autorizacion;
use Illuminate\Database\Seeder;

class AutorizacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Permiso = new Autorizacion();
        $Permiso->nombre = "Rol";
        $Permiso->descripcion = "Este es el Controlador Rol, en una tabla puente (Accesos) fijaremos si el rol que tiene acceso al este Controlador puede ejecutar el Metodo en el permiso con una triple conprobacion ";
        $Permiso->slug = "rol";
        $Permiso->save();

        $Permiso = new Autorizacion();
        $Permiso->nombre = "Permisos";
        $Permiso->descripcion = "Este es el Controlador Permisos, en una tabla puente (Accesos) fijaremos si el rol que tiene acceso al este Controlador puede ejecutar el Metodo en el permiso con una triple conprobacion ";
        $Permiso->slug = "permisos";
        $Permiso->save();
        $Permiso->save();

        $Permiso = new Autorizacion();
        $Permiso->nombre = "Usuarios";
        $Permiso->descripcion = "Este es el Controlador Usuarios, en una tabla puente (Accesos) fijaremos si el rol que tiene acceso al este Controlador puede ejecutar el Metodo en el permiso con una triple conprobacion ";
        $Permiso->slug = "Usuarios";
        $Permiso->save();
        $Permiso->save();

        $Permiso = new Autorizacion();
        $Permiso->nombre = "Test";
        $Permiso->descripcion = "Este es el Controlador Test, en una tabla puente (Accesos) fijaremos si el rol que tiene acceso al este Controlador puede ejecutar el Metodo en el permiso con una triple conprobacion ";
        $Permiso->slug = "Test";
        $Permiso->save();
        $Permiso->save();

        $Permiso = new Autorizacion();
        $Permiso->nombre = "Test2";
        $Permiso->descripcion = "Este es el Controlador Test2, en una tabla puente (Accesos) fijaremos si el rol que tiene acceso al este Controlador puede ejecutar el Metodo en el permiso con una triple conprobacion ";
        $Permiso->slug = "Test2";
        $Permiso->save();
        $Permiso->save();

        $Permiso = new Autorizacion();
        $Permiso->nombre = "Test3";
        $Permiso->descripcion = "Este es el Controlador Test3, en una tabla puente (Accesos) fijaremos si el rol que tiene acceso al este Controlador puede ejecutar el Metodo en el permiso con una triple conprobacion ";
        $Permiso->slug = "Test3";
        $Permiso->save();
        $Permiso->save();

        $Permiso = new Autorizacion();
        $Permiso->nombre = "Test4";
        $Permiso->descripcion = "Este es el Controlador Test4, en una tabla puente (Accesos) fijaremos si el rol que tiene acceso al este Controlador puede ejecutar el Metodo en el permiso con una triple conprobacion ";
        $Permiso->slug = "Test4";
        $Permiso->save();
        $Permiso->save();

        $Permiso = new Autorizacion();
        $Permiso->nombre = "Test5";
        $Permiso->descripcion = "Este es el Controlador Test5, en una tabla puente (Accesos) fijaremos si el rol que tiene acceso al este Controlador puede ejecutar el Metodo en el permiso con una triple conprobacion ";
        $Permiso->slug = "Test5";
        $Permiso->save();
        $Permiso->save();

        $Permiso = new Autorizacion();
        $Permiso->nombre = "Test6";
        $Permiso->descripcion = "Este es el Controlador Test6, en una tabla puente (Accesos) fijaremos si el rol que tiene acceso al este Controlador puede ejecutar el Metodo en el permiso con una triple conprobacion ";
        $Permiso->slug = "Test6";
        $Permiso->save();
    }
}
