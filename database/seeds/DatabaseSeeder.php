<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->truncarTablas([
            'roles',
            'users',
            'permisos',
            'autorizaciones',
            'accesos',
        ]);

        $info = [
            'rol' => '
            Los Roles Fueron Creados Exitosamente
            ',
            'autorizacion' => '
            Los metodos Fueron creados
            ',
            'permiso' => '
            Los permisos fueron Creados Exitosamente
            ',
            'acceso' => '
            Los accesos fueron Creados Exitosamente
            ',
            'user' => '
            Los Usuarios se Crearon en la plataforma
            Dispones de:
            - Un SuperAdministrador
            - Un Administrador
            - 48 Usuarios aleatorios entre Editores y Users

            Ya Estan Todos Con su Rol Asignado'
        ];

        $this->call(RolesSeeder::class);
        $this->command->info($info['rol']);
        $this->call(AutorizacionSeeder::class);
        $this->command->info($info['autorizacion']);
        $this->call(PermisoSeeder::class);
        $this->command->info($info['permiso']);
        $this->call(AccesoSeeder::class);
        $this->command->info($info['acceso']);
        $this->call(UserSeeder::class);
        $this->command->info($info['user']);
    }

    protected function truncarTablas(array $tablas)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tablas as $tabla){
            DB::table($tabla)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
