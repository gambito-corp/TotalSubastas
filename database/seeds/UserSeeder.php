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
            'avatar'            => 'default.png',
            'email_verified_at' => now(),
            'password'          => Hash::make('C4tntnox*+'),
            'completo'          => true,
            'tipo'              => 'natural'
        ]);
        User::create([
            'role_id'           => '1',
            'name'              => 'test 1',
            'email'             => 'test1@test.com',
            'avatar'            => 'default.png',
            'email_verified_at' => now(),
            'password'          => Hash::make('Admin'),
            'completo'          => true,
            'tipo'              => 'natural'
        ]);
        User::create([
            'role_id'           => '1',
            'name'              => 'gonsan300',
            'email'             => 'admin@gonzalo.com',
            'avatar'            => 'default.png',
            'email_verified_at' => now(),
            'password'          => Hash::make('Admin'),
            'completo'          => true,
            'tipo'              => 'natural'
        ]);
        User::create([
            'role_id'           => '2',
            'name'              => 'alevel418',
            'email'             => 'alexis.veliz.83@gmail.com',
            'avatar'            => 'default.png',
            'email_verified_at' => now(),
            'password'          => Hash::make('Admin'),
            'completo'          => true,
            'tipo'              => 'natural'
        ]);
        User::create([
            'role_id'           => '2',
            'name'              => 'andvel443',
            'email'             => 'avega@rachacreativa.com',
            'avatar'            => 'default.png',
            'email_verified_at' => now(),
            'password'          => Hash::make('Admin'),
            'completo'          => true,
            'tipo'              => 'natural'
        ]);
    }
}
