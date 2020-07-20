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
        Lot::create([
            'empresa_id'    => 1,
            'nombre'        => 'Lote #020620',
            'descripcion'   => '<p>Lote de test 2</p>',
            'slug'          => 'lote_020620',
            'subasta_at'    => '2020-07-19 17:20:00'
        ]);
        Lot::create([
            'empresa_id'    => 2,
            'nombre'        => 'Lote #040620',
            'descripcion'   => '<p>Lote de test 3</p>',
            'slug'          => 'lote_040620',
            'subasta_at'    => '2020-07-19 17:20:00'
        ]);
        Lot::create([
            'empresa_id'    => 2,
            'nombre'        => 'Lote #010520',
            'descripcion'   => '<p>Lote de test 4</p>',
            'slug'          => 'lote_010520',
            'subasta_at'    => '2020-07-19 17:20:00'
        ]);
        Lot::create([
            'empresa_id'    => 3,
            'nombre'        => 'Lote #020520',
            'descripcion'   => '<p>Lote de test 5</p>',
            'slug'          => 'lote_020520',
            'subasta_at'    => '2020-07-19 17:20:00'
        ]);
        Lot::create([
            'empresa_id'    => 3,
            'nombre'        => 'Lote #040420',
            'descripcion'   => '<p>Lote de test 6</p>',
            'slug'          => 'lote_040420',
            'subasta_at'    => '2020-07-19 17:20:00'
        ]);
        Lot::create([
            'empresa_id'    => 4,
            'nombre'        => 'Lote #050420',
            'descripcion'   => '<p>Lote de test 7</p>',
            'slug'          => 'lote_050420',
            'subasta_at'    => '2020-07-19 17:20:00'
        ]);
    }
}
