<?php

use Illuminate\Database\Seeder;
use App\Warehouse;

class AlmacenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Warehouse::create([
            'empresa_id'        => 1,
            'direccion_id'      => 1,
            'turnos_visita'     => 'turnos de visita',
            'telefono'          => '666555444',
            'informacion'       => 'texto de informacion del almacen',
            'max_personas'      => 'numero maximo de personas'
        ]);
    }
}
