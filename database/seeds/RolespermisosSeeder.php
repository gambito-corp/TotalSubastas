<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\roles;
use App\permisos;
use App\rolespermisos;

class RolespermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = roles::all();
        $permiso = permisos::all();
        for ($i=0; $i < 8; $i++) {
            $rolpermiso = new rolespermisos();
            $rolpermiso->roles_id = $rol[0]['id'];
            $rolpermiso->permisos_id = $permiso[$i]['id'];
            $rolpermiso->save();
        }
        for ($i=0; $i < 7; $i++) {
            $rolpermiso = new rolespermisos();
            $rolpermiso->roles_id = $rol[1]['id'];
            $rolpermiso->permisos_id = $permiso[$i]['id'];
            $rolpermiso->save();
        }
        for ($i=0; $i < 5; $i++) {
            $rolpermiso = new rolespermisos();
            $rolpermiso->roles_id = $rol[2]['id'];
            $rolpermiso->permisos_id = $permiso[$i]['id'];
            $rolpermiso->save();
        }
        for ($i=0; $i < 1; $i++) {
            $rolpermiso = new rolespermisos();
            $rolpermiso->roles_id = $rol[3]['id'];
            $rolpermiso->permisos_id = $permiso[$i]['id'];
            $rolpermiso->save();
        }


    }
}
