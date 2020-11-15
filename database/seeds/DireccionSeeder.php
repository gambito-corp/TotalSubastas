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
            'direccion1'        => 'Huarmey',
            'referencia'        => 'A la Espalda del Parque del niño',
            'titulo_direccion'  => 'Direccion de Casa 1'
        ]);
    }
}
