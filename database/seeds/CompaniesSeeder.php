<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'persona_juridica_id' => 1,
            'direccion_id' => 2,
            'nombre' => 'Multitiendas Perú',
            'razon_social' => 'Multitiendas S.A.C',
            'ruc' => '20604045747',
            'telefono' => '960717583',
            'email' => 'asesor.pedro@gmail.com',
            'informacion' => '<p>sfdsgfsdgfdfsdf<strong>sdfsdfsdfsddsfsd</strong></p>',
            'imagen' => 'multitiendas_peru.jpg',
        ]);
    }
}
