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
        Brand::create([
            'parent_id' => null,
            'nombre'    => 'Chevrolet',
            'slug'      => 'chevrolet'
        ]);
        Brand::create([
            'parent_id' => 3,
            'nombre'    => 'Sail',
            'slug'      => 'sail'
        ]);
        Brand::create([
            'parent_id' => null,
            'nombre'    => 'Kia',
            'slug'      => 'kia'
        ]);
        Brand::create([
            'parent_id' => 5,
            'nombre'    => 'Rio',
            'slug'      => 'rio'
        ]);
        Brand::create([
            'parent_id' => 1,
            'nombre'    => 'Corola',
            'slug'      => 'corola'
        ]);
        Brand::create([
            'parent_id' => 3,
            'nombre'    => 'Spin',
            'slug'      => 'spin'
        ]);
    }
}
