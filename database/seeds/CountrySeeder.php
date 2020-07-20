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
            'codigo'    => 'PE'
        ]);
        Country::create([
            'parent_id' => null,
            'nombre'    => 'España',
            'codigo'    => 'Es'
        ]);
        Country::create([
            'parent_id' => 1,
            'nombre'    => 'Lima',
            'codigo'    => 'LiM'
        ]);
        Country::create([
            'parent_id' => 2,
            'nombre'    => 'Madrid',
            'codigo'    => 'MAD'
        ]);
        Country::create([
            'parent_id' => 3,
            'nombre'    => 'Lima',
            'codigo'    => 'LiM'
        ]);
        Country::create([
            'parent_id' => 5,
            'nombre'    => 'Los Olivos',
            'codigo'    => 'OLV'
        ]);
    }
}
