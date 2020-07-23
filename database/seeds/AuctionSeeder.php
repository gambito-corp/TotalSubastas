<?php

use App\Auction;
use Illuminate\Database\Seeder;

class AuctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Auction::create([
            'producto_id' => 1,
            'ganador_id' => 1,
            'segundo_id' => 2,
            'tercero_id' => 3
        ]);
        Auction::create([
            'producto_id' => 2,
            'ganador_id' => 2,
            'segundo_id' => 3,
            'tercero_id' => 1
        ]);
        Auction::create([
            'producto_id' => 3,
            'ganador_id' => 3,
            'segundo_id' => 1,
            'tercero_id' => 2
        ]);
        Auction::create([
            'producto_id' => 4,
            'ganador_id' => 2,
            'segundo_id' => 3,
            'tercero_id' => 1
        ]);
        Auction::create([
            'producto_id' => 5,
            'ganador_id' => 1,
            'segundo_id' => 2,
            'tercero_id' => 3
        ]);
    }
}
