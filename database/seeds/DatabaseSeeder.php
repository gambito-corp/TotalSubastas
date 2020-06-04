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
            'users'
        ]);

        $info = [
            'user' => '
            Los Usuarios se Crearon en la plataforma
            Dispones de:
            - Un SuperAdministrador
            - Un Administrador
            - 48 Usuarios aleatorios entre Editores y Users

            Ya Estan Todos Con su Rol Asignado'
        ];

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
