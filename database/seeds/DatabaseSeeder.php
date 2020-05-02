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
            'permisos',
            'roles_permisos',
            'users',
            'avatars',
            'clientes',
            'cliente_naturales'
        ]);

        $info = [
            'rol' => '
            Los Roles Fueron Creados Exitosamente
            ',
            'permiso' => '
            Los Permisos Fueron Creados Exitosamente
            ',
            'rolpermiso' => '
            Los Roles y Los Permisos Fueron Enlazados Exitosamente
            ',
            'user' => '
            Los Usuarios se Crearon en la plataforma
            Dispones de:
            - Un SuperAdministrador
            - Un Administrador
            - 48 Usuarios aleatorios entre Editores y Users

            Ya Estan Todos Con su Rol Asignado',
            'avatar' => '
            Todas las imagenes de prueba fueron cargadas en la BD,
            Ahora todos los Usuarios Tiene La imagen Por Default
            ',
            'clientes' => '
            se crearon los clientes Exitosamente
            ',
            'cliente_naturales' => '
            Estos Clientes fueron agregados como clientes Naturales
            '
        ];

        $this->call(RolesSeeder::class);
        $this->command->info($info['rol']);
        $this->call(PermisosSeeder::class);
        $this->command->info($info['permiso']);
        $this->call(RolespermisosSeeder::class);
        $this->command->info($info['rolpermiso']);
        $this->call(UserSeeder::class);
        $this->command->info($info['user']);
        $this->call(AvatarSeeder::class);
        $this->command->info($info['avatar']);
        $this->call(ClienteSeeder::class);
        $this->command->info($info['clientes']);
        $this->call(ClienteNaturalSeeder::class);
        $this->command->info($info['cliente_naturales']);
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
