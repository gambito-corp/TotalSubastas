<?php

use App\ActiveAuc;
use App\Participacion;
use Illuminate\Database\Seeder;

class ParticipacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 1;
        for ($c = 1; $c < 3; $c++) {
            for ($l = 1; $l < 5; $l++) {
                Participacion::create([
                    'user_id' => $c,
                    'producto_id' => $l,
                    'participacion' => $i++
                ]);
            }
        }
    }
}
