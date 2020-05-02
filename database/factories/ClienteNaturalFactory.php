<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\cliente_natural;
use App\cliente;
use App\User;

$factory->define(cliente_natural::class, function (Faker $faker) {
    return [
        'primer_nombre' => $faker->firstName,
        'segundo_nombre' => $faker->optional()->firstName,
        'primer_apellido' => $faker->lastName,
        'segundo_apellido' => $faker->optional()->lastName,
        'dni' => $faker->unique()->ean8,
        'digito' => $faker->randomDigit
    ];
});
