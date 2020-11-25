<?php

use Illuminate\Database\Seeder;
use App\LegalPerson;
class JuridicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LegalPerson::create([
            'user_id'       => 2,
            'banco_id'      => 1,
            'direccion_id'  => 1,
            'nombre'        => 'Persona juridica 1',
            'razon_social'  => 'persona juridica 1 S.A.C',
            'ruc'           => '20604045747',
            'numero_cuenta' => '64645646541651564',
            'telefono'      => '960717583',
            'email'         => 'email@empresa.com'
        ]);
    }
}
