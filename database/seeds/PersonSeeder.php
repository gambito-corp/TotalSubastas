<?php

use Illuminate\Database\Seeder;
use App\Person;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Person::create([
            'user_id'           => 1,
            'direccion_id'      => 1,
            'banco_id'          => 1,
            'nombres'           => 'Sidi Farid',
            'apellidos'         => 'Raoui Aguirre',
            'tipo_documento'    => 'DNI',
            'numero_documento'  => 1234567,
            'digito_documento'  => 1,
            'genero'            => 'Hombre',
            'estado_civil'      => 'Soltero',
            'cuenta_banco'      => '133-5544-5566-6589',
            'b_day'             => '1988-10-12',
            'telefono'          => '960717583',
            'email'             => 'asesor.pedro@gmail.com',
            'dni_front'         => 'img/dni/delante.jpg',
            'dni_back'          => 'img/dni/atras.jpg'
        ]);
    }
}
