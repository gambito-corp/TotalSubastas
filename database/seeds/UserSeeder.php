<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'role_id'           => '1',
            'name'              => 'Pedro',
            'email'             => 'asesor.pedro@gmail.com',
            'avatar'            => 'users/default.png',
            'email_verified_at' => now(),
            'password'          => Hash::make('C4tntnox*+')
        ]);
        User::create([
            'role_id'           => '1',
            'name'              => 'test 1',
            'email'             => 'test1@test.com',
            'avatar'            => 'users/default.png',
            'email_verified_at' => now(),
            'password'          => Hash::make('Admin')
        ]);
        User::create([
            'role_id'           => '1',
            'name'              => 'gonsan300',
            'email'             => 'admin@gonzalo.com',
            'avatar'            => 'users/default.png',
            'email_verified_at' => now(),
            'password'          => '$2y$10$kxtT5iAxHNGLisAnFI6dbuHtJFZxqddivOnVlJvH7ndal/gp15x3y'
        ]);
        factory(User::class)->times(100)->create();


    }
}
