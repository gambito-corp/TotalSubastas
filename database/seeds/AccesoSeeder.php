<?php

use App\Acceso;
use Illuminate\Database\Seeder;

class AccesoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Permisos del Super Admin
        $Permiso = new Acceso();
        $Permiso->rol_id = 1;
        $Permiso->autorizacion_id = 1;
        $Permiso->permiso_id = 1;
        $Permiso->save();

        $Permiso = new Acceso();
        $Permiso->rol_id = 1;
        $Permiso->autorizacion_id = 1;
        $Permiso->permiso_id = 2;
        $Permiso->save();

        $Permiso = new Acceso();
        $Permiso->rol_id = 1;
        $Permiso->autorizacion_id = 1;
        $Permiso->permiso_id = 3;
        $Permiso->save();

        $Permiso = new Acceso();
        $Permiso->rol_id = 1;
        $Permiso->autorizacion_id = 1;
        $Permiso->permiso_id = 4;
        $Permiso->save();

        $Permiso = new Acceso();
        $Permiso->rol_id = 1;
        $Permiso->autorizacion_id = 1;
        $Permiso->permiso_id = 5;
        $Permiso->save();

        $Permiso = new Acceso();
        $Permiso->rol_id = 1;
        $Permiso->autorizacion_id = 1;
        $Permiso->permiso_id = 6;
        $Permiso->save();

        $Permiso = new Acceso();
        $Permiso->rol_id = 1;
        $Permiso->autorizacion_id = 1;
        $Permiso->permiso_id = 7;
        $Permiso->save();

        $Permiso = new Acceso();
        $Permiso->rol_id = 1;
        $Permiso->autorizacion_id = 1;
        $Permiso->permiso_id = 8;
        $Permiso->save();

        $Permiso = new Acceso();
        $Permiso->rol_id = 1;
        $Permiso->autorizacion_id = 1;
        $Permiso->permiso_id = 9;
        $Permiso->save();

        $Permiso = new Acceso();
        $Permiso->rol_id = 1;
        $Permiso->autorizacion_id = 1;
        $Permiso->permiso_id = 10;
        $Permiso->save();

        // Permisos del Admin
        $Permiso = new Acceso();
        $Permiso->rol_id = 2;
        $Permiso->autorizacion_id = 2;
        $Permiso->permiso_id = 1;
        $Permiso->save();

        $Permiso = new Acceso();
        $Permiso->rol_id = 2;
        $Permiso->autorizacion_id = 2;
        $Permiso->permiso_id = 2;
        $Permiso->save();

        $Permiso = new Acceso();
        $Permiso->rol_id = 2;
        $Permiso->autorizacion_id = 2;
        $Permiso->permiso_id = 3;
        $Permiso->save();

        $Permiso = new Acceso();
        $Permiso->rol_id = 2;
        $Permiso->autorizacion_id = 2;
        $Permiso->permiso_id = 4;
        $Permiso->save();

        $Permiso = new Acceso();
        $Permiso->rol_id = 2;
        $Permiso->autorizacion_id = 2;
        $Permiso->permiso_id = 5;
        $Permiso->save();

        $Permiso = new Acceso();
        $Permiso->rol_id = 2;
        $Permiso->autorizacion_id = 2;
        $Permiso->permiso_id = 6;
        $Permiso->save();

        $Permiso = new Acceso();
        $Permiso->rol_id = 2;
        $Permiso->autorizacion_id = 2;
        $Permiso->permiso_id = 7;
        $Permiso->save();

        $Permiso = new Acceso();
        $Permiso->rol_id = 2;
        $Permiso->autorizacion_id = 2;
        $Permiso->permiso_id = 8;
        $Permiso->save();

        $Permiso = new Acceso();
        $Permiso->rol_id = 2;
        $Permiso->autorizacion_id = 2;
        $Permiso->permiso_id = 9;
        $Permiso->save();
    }
}
