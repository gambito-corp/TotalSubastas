<?php

use App\ActiveAuc;
use Illuminate\Database\Seeder;

class ActivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($c = 1; $c < 3; $c++) {
            for ($l = 1; $l < 5; $l++) {
                ActiveAuc::create([
                    'producto_id' => $l,
                    'user_id' => $c
                ]);
            }
        }
    }
}
