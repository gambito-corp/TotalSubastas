<?php

use Illuminate\Database\Seeder;
use App\Address;

class DireccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Address::create([
            'user_id'           => 1,
            'pais_id'           => 1,
            'departamento_id'   => 3,
            'provincia_id'      => 5,
            'distrito_id'       => 6,
            'tipo_via'          => 'JR',
            'direccion1'        => 'Huarmey',
            'direccion2'        => null,
            'numero'            => '1410',
            'int_ext'           => null,
            'referencia'        => 'A la Espalda del Parque del niño',
            'titulo_direccion'  => 'Direccion de Casa 1'
        ]);
        Address::create([
            'user_id'           => 1,
            'pais_id'           => 1,
            'departamento_id'   => 3,
            'provincia_id'      => 5,
            'distrito_id'       => 6,
            'tipo_via'          => 'JR',
            'direccion1'        => 'Huarmey',
            'direccion2'        => null,
            'numero'            => '1412',
            'int_ext'           => null,
            'referencia'        => 'A la Espalda del Parque del niño',
            'titulo_direccion'  => 'Direccion de Casa 2'
        ]);
        Address::create([
            'user_id'           => 2,
            'pais_id'           => 1,
            'departamento_id'   => 3,
            'provincia_id'      => 5,
            'distrito_id'       => 6,
            'tipo_via'          => 'Av.',
            'direccion1'        => 'Antunez de Mayolo',
            'direccion2'        => null,
            'numero'            => '1401',
            'int_ext'           => null,
            'referencia'        => 'A la Espalda del Parque del niño',
            'titulo_direccion'  => 'Direccion de Casa 3'
        ]);
        Address::create([
            'user_id'           => 2,
            'pais_id'           => 1,
            'departamento_id'   => 3,
            'provincia_id'      => 5,
            'distrito_id'       => 6,
            'tipo_via'          => 'JR',
            'direccion1'        => 'Huarmey',
            'direccion2'        => null,
            'numero'            => '1395',
            'int_ext'           => null,
            'referencia'        => 'A la Espalda del Parque del niño',
            'titulo_direccion'  => 'Direccion de Casa 4'
        ]);
        Address::create([
            'user_id'           => 3,
            'pais_id'           => 1,
            'departamento_id'   => 3,
            'provincia_id'      => 5,
            'distrito_id'       => 6,
            'tipo_via'          => 'JR',
            'direccion1'        => 'Huarmey',
            'direccion2'        => null,
            'numero'            => '1100',
            'int_ext'           => null,
            'referencia'        => 'A la Espalda del Parque del niño',
            'titulo_direccion'  => 'Direccion de Casa 4'
        ]);
        Address::create([
            'user_id'           => 3,
            'pais_id'           => 1,
            'departamento_id'   => 3,
            'provincia_id'      => 5,
            'distrito_id'       => 6,
            'tipo_via'          => 'JR',
            'direccion1'        => 'Huarmey',
            'direccion2'        => null,
            'numero'            => '1222',
            'int_ext'           => null,
            'referencia'        => 'A la Espalda del Parque del niño',
            'titulo_direccion'  => 'Direccion de Casa 4'
        ]);

    }
}
