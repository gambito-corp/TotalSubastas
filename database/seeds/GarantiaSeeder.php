<?php

use App\Garantia;
use Illuminate\Database\Seeder;

class GarantiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Garantia::create([
            'producto_id' => 1,
            'user_id' => 1,
            'monto' => 1000
        ]);
        Garantia::create([
            'producto_id' => 1,
            'user_id' => 2,
            'monto' => 1000
        ]);
        Garantia::create([
            'producto_id' => 1,
            'user_id' => 3,
            'monto' => 1000
        ]);
    }
}
