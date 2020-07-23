<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create([
            'parent_id' => null,
            'nombre'    => 'Perú',
            'descripcion'=> 'Pais',
            'codigo'    => 'PE'
        ]);
        Country::create([
            'parent_id' => null,
            'nombre'    => 'España',
            'descripcion'=> 'Pais',
            'codigo'    => 'Es'
        ]);
        Country::create([
            'parent_id' => 1,
            'nombre'    => 'Lima',
            'descripcion'=> 'Departamento',
            'codigo'    => 'LiM'
        ]);
        Country::create([
            'parent_id' => 2,
            'nombre'    => 'Madrid',
            'descripcion'=> 'Departamento',
            'codigo'    => 'MAD'
        ]);
        Country::create([
            'parent_id' => 3,
            'nombre'    => 'Lima',
            'descripcion'=> 'Provincia',
            'codigo'    => 'LiM'
        ]);
        Country::create([
            'parent_id' => 5,
            'nombre'    => 'Los Olivos',
            'descripcion'=> 'Distrito',
            'codigo'    => 'OLV'
        ]);
    }
}
