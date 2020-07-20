<?php

use Illuminate\Database\Seeder;
use App\Rol;

class RolesSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        Rol::create([
            'name'          => 'Admin',
            'display_name'  => 'admin'
        ]);
        Rol::create([
            'name'          => 'User',
            'display_name'  => 'user'
        ]);
    }
}
