<?php

use Illuminate\Database\Seeder;
use App\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'parent_id' => null,
            'nombre'    => 'Toyota',
            'slug'      => 'toyota'
        ]);
        Brand::create([
            'parent_id' => 1,
            'nombre'    => 'Yaris',
            'slug'      => 'yaris'
        ]);
    }
}
