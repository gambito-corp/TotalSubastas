<?php

use App\Ranking;
use Illuminate\Database\Seeder;

class RankingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 20; $i++){
            for ($c = 1; $c < 3; $c++) {
                for ($l = 1; $l < 5; $l++) {
                    Ranking::create([
                        'producto_id' => $l,
                        'user_id' => $c
                    ]);
                }
            }
        }
    }
}
