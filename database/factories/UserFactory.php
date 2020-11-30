<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    $nombre = $faker->name;
    $apellido = $faker->name;
    $nombre = substr($nombre, 0,2).substr($apellido, 0,2).rand(0,99);
    return [
        'role_id'           => rand(2,3),
        'name'              => $nombre,
        'email'             => $faker->unique()->safeEmail,
        'avatar'            => 'default.png',
        'email_verified_at' => now(),
        'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token'    => Str::random(10),
        'completo'          => true,
        'tipo'              => $faker->randomElement($array = array ('natural','juridica'))
    ];
});
