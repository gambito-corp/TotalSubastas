<?php

use App\Slide;
use Illuminate\Database\Seeder;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slide::create([
            'ruta'      => '1.png',
            'activo'    => 1
        ]);

        Slide::create([
            'ruta'      => '2.png',
            'activo'    => 1
        ]);

        Slide::create([
            'ruta'      => '3.png',
            'activo'    => 1
        ]);
    }
}
