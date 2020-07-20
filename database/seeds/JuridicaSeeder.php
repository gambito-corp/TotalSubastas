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
            'persona_id'    => 1,
            'banco_id'      => 1,
            'direccion_id'  => 1,
            'direccion2_id' => 1,
            'nombre'        => 'Pedro Aguirre Consultores',
            'razon_social'  => 'Pedro Aguirre Consultores SAC',
            'ruc'           => '20000000000',
            'numero_cuenta' => '64645646541651564',
            'telefono'      => '960717583'
        ]);
    }
}
