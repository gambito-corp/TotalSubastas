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
            'user_id'       => 1,
            'banco_id'      => 1,
            'direccion_id'  => 1,
            'direccion2_id' => 2,
            'nombre'        => 'Multitiendas Perú',
            'razon_social'  => 'Multitiendas S.A.C',
            'ruc'           => '20604045747',
            'numero_cuenta' => '64645646541651564',
            'telefono'      => '960717583',
            'email'         => 'email@empresa.com'
        ]);
        LegalPerson::create([
            'user_id'       => 1,
            'banco_id'      => 2,
            'direccion_id'  => 3,
            'direccion2_id' => 4,
            'nombre'        => 'Belcorp',
            'razon_social'  => 'Belcorp S.A.C',
            'ruc'           => '20604045747',
            'numero_cuenta' => '64645646541651564',
            'telefono'      => '960717583',
            'email'         => 'email@empresa.com'
        ]);
        LegalPerson::create([
            'user_id'       => 1,
            'banco_id'      => 3,
            'direccion_id'  => 5,
            'direccion2_id' => 6,
            'nombre'        => 'Saga Falabella',
            'razon_social'  => 'Almacenes Peruanos S.A.C.',
            'ruc'           => '20604045747',
            'numero_cuenta' => '64645646541651564',
            'telefono'      => '960717583',
            'email'         => 'email@empresa.com'
        ]);
        LegalPerson::create([
            'user_id'       => 1,
            'banco_id'      => 2,
            'direccion_id'  => 1,
            'direccion2_id' => 2,
            'nombre'        => 'Banco Ripley',
            'razon_social'  => 'Ripley S.A.C.',
            'ruc'           => '20604045747',
            'numero_cuenta' => '64645646541651564',
            'telefono'      => '960717583',
            'email'         => 'email@empresa.com'
        ]);
    }
}
