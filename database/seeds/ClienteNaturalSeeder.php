<?php

use App\cliente;
use App\cliente_natural;
use App\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ClienteNaturalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $data = cliente::all();
        foreach($data as $dat){
            $cliente_natural = new cliente_natural();
            $cliente_natural->user_id = $dat->user->id;
            $cliente_natural->clientes_id = $dat->id;
            $cliente_natural->primer_nombre = $faker->firstName;
            $cliente_natural->segundo_nombre = $faker->optional()->firstName;
            $cliente_natural->primer_apellido = $faker->lastName;
            $cliente_natural->segundo_apellido = $faker->optional()->lastName;
            $cliente_natural->dni = $faker->unique()->ean8;
            $cliente_natural->digito = $faker->randomDigit;
            $cliente_natural->save();
        }
    }
}
