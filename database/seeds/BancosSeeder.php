<?php

use Illuminate\Database\Seeder;
use App\Bank;

class BancosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bank::create([
            'nombre'    => 'Banco de Credito del Peru',
            'siglas'    => 'BCP'
        ]);
    }
}
