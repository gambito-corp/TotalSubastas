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
        Person::create([
            'user_id'           => 2,
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
        Person::create([
            'user_id'           => 3,
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
        Person::create([
            'user_id'           => 4,
            'nombres'           => 'alexis edmundo',
            'apellidos'         => 'veliz de la barrera',
            'tipo_documento'    => 'DNI',
            'numero_documento'  => 41891163,
            'digito_documento'  => 1,
            'genero'            => 'Hombre',
            'estado_civil'      => 'Soltero',
            'cuenta_banco'      => '133-5544-5566-6589',
            'b_day'             => '1988-10-12',
            'telefono'          => '983521436',
            'email'             => 'alexis.veliz.83@gmail.com',
            'dni_front'         => 'img/dni/delante.jpg',
            'dni_back'          => 'img/dni/atras.jpg'
        ]);
        Person::create([
            'user_id'           => 5,
            'nombres'           => 'andres',
            'apellidos'         => 'vela',
            'tipo_documento'    => 'DNI',
            'numero_documento'  => 44369984,
            'digito_documento'  => 1,
            'genero'            => 'Hombre',
            'estado_civil'      => 'Soltero',
            'cuenta_banco'      => '133-5544-5566-6589',
            'b_day'             => '1988-10-12',
            'telefono'          => '9910019333',
            'email'             => 'avega@rachacreativa.com',
            'dni_front'         => 'img/dni/delante.jpg',
            'dni_back'          => 'img/dni/atras.jpg'
        ]);
        Person::create([
            'user_id'           => 6,
            'nombres'           => 'Javier',
            'apellidos'         => 'Diaz',
            'tipo_documento'    => 'DNI',
            'numero_documento'  => 44369984,
            'digito_documento'  => 1,
            'genero'            => 'Hombre',
            'estado_civil'      => 'Casado',
            'cuenta_banco'      => '133-5544-5566-6589',
            'b_day'             => '1988-10-12',
            'telefono'          => '9910019333',
            'email'             => 'admin@totalsubastas.com',
            'dni_front'         => 'img/dni/delante.jpg',
            'dni_back'          => 'img/dni/atras.jpg'
        ]);
        Person::create([
            'user_id'           => 7,
            'nombres'           => 'nohely',
            'apellidos'         => 'Diseño',
            'tipo_documento'    => 'DNI',
            'numero_documento'  => 44369984,
            'digito_documento'  => 1,
            'genero'            => 'Mujer',
            'estado_civil'      => 'soltero',
            'cuenta_banco'      => '133-5544-5566-6589',
            'b_day'             => '1988-10-12',
            'telefono'          => '9910019333',
            'email'             => 'diseño@totalsubastas.com',
            'dni_front'         => 'img/dni/delante.jpg',
            'dni_back'          => 'img/dni/atras.jpg'
        ]);
    }
}
