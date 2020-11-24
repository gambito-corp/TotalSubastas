<?php

use Illuminate\Database\Seeder;
use App\Producto;
use Carbon\Carbon;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::create([
            'user_id'           => 2,
            'empresa_id'        => 1,
            'lote_id'           => 1,
            'ciudad'            => 'Lima',
            'tipo_vehiculo'     => 'Vehiculo Ligero',
            'tipo_subasta'      => 'Subasta',
            'tipo_reserva'      => 'Sin Reserva',
            'nombre'            => 'KIA RIO 2014',
            'imagen'            => '1.jpg',
            'precio'            => 1000,
            'precio_reserva'    => 3000,
            'garantia'          => 10,
            'puja'              => 100,
            'comision'          => 5,
            'started_at'        => Carbon::now()->addMinutes(10),
            'finalized_at'      => Carbon::now()->addHours(3),
        ]);
    }
}
