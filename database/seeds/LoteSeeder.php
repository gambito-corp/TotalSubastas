<?php

use Illuminate\Database\Seeder;
use App\Lot;

class LoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lot::create([
            'empresa_id'    => 1,
            'nombre'        => 'Lote #010720',
            'descripcion'   => '<p>Lote de test</p>',
            'slug'          => 'lote_010720',
            'subasta_at'    => '2020-07-19 17:20:00'
        ]);
    }
}
