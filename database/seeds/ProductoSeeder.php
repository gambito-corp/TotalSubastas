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
            'user_id'           => 3,
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
            'garantia'          => 1000,
            'puja'              => 100,
            'comision'          => 5,
            'started_at'        => Carbon::now(),
            'finalized_at'      => Carbon::now()->addYear(),
        ]);
        Producto::create([
            'user_id'           => 3,
            'empresa_id'        => 4,
            'lote_id'           => 7,
            'ciudad'            => 'Lima',
            'tipo_vehiculo'     => 'Vehiculo Ligero',
            'tipo_subasta'      => 'Subasta',
            'tipo_reserva'      => 'Sin Reserva',
            'nombre'            => 'TOYOTA AXS 2015',
            'imagen'            => '2.jpg',
            'precio'            => 1000,
            'precio_reserva'    => 3000,
            'garantia'          => 1000,
            'puja'              => 100,
            'comision'          => 5,
            'started_at'        => Carbon::now(),
            'finalized_at'      => Carbon::now()->addYear(),
        ]);
        Producto::create([
            'user_id'           => 3,
            'empresa_id'        => 1,
            'lote_id'           => 2,
            'ciudad'            => 'Lima',
            'tipo_vehiculo'     => 'Vehiculo Pesado',
            'tipo_subasta'      => 'Compra',
            'tipo_reserva'      => 'Compra Directa',
            'nombre'            => 'NISSAN SENTRA 2008',
            'imagen'            => '3.jpg',
            'precio'            => 1100,
            'precio_reserva'    => 3000,
            'garantia'          => 1000,
            'puja'              => 100,
            'comision'          => 5,
            'started_at'        => Carbon::now(),
            'finalized_at'      => Carbon::now()->addYear(),
        ]);
        Producto::create([
            'user_id'           => 3,
            'empresa_id'        => 2,
            'lote_id'           => 3,
            'ciudad'            => 'Lima',
            'tipo_vehiculo'     => 'Vehiculo Pesado',
            'tipo_subasta'      => 'Subasta',
            'tipo_reserva'      => 'Con Reserva',
            'nombre'            => 'HYUNDAI AXS 2013',
            'imagen'            => '4.jpg',
            'precio'            => 1200,
            'precio_reserva'    => 3000,
            'garantia'          => 1000,
            'puja'              => 100,
            'comision'          => 5,
            'started_at'        => Carbon::now(),
            'finalized_at'      => Carbon::now()->addYear(),
        ]);
        Producto::create([
            'user_id'           => 3,
            'empresa_id'        => 2,
            'lote_id'           => 4,
            'ciudad'            => 'Huanuco',
            'tipo_vehiculo'     => 'Vehiculo Ligero',
            'tipo_subasta'      => 'Subasta',
            'tipo_reserva'      => 'Sin Reserva',
            'nombre'            => 'RUBICON FORD 2012',
            'imagen'            => '5.jpg',
            'precio'            => 1300,
            'precio_reserva'    => 3000,
            'garantia'          => 1000,
            'puja'              => 100,
            'comision'          => 5,
            'started_at'        => Carbon::now(),
            'finalized_at'      => Carbon::now()->addYear(),
        ]);
        Producto::create([
            'user_id'           => 3,
            'empresa_id'        => 3,
            'lote_id'           => 5,
            'ciudad'            => 'Huanuco',
            'tipo_vehiculo'     => 'Vehiculo Ligero',
            'tipo_subasta'      => 'Compra',
            'tipo_reserva'      => 'Compra Directa',
            'nombre'            => 'HONDA LANSER 2011',
            'imagen'            => '6.jpg',
            'precio'            => 1400,
            'precio_reserva'    => 3000,
            'garantia'          => 1000,
            'puja'              => 100,
            'comision'          => 5,
            'started_at'        => Carbon::now(),
            'finalized_at'      => Carbon::now()->addYear(),
        ]);
        Producto::create([
            'user_id'           => 3,
            'empresa_id'        => 3,
            'lote_id'           => 6,
            'ciudad'            => 'Huanuco',
            'tipo_vehiculo'     => 'Vehiculo Ligero',
            'tipo_subasta'      => 'Subasta',
            'tipo_reserva'      => 'Con Reserva',
            'nombre'            => 'NISSAN AAA 2010',
            'imagen'            => '7.jpg',
            'precio'            => 1500,
            'precio_reserva'    => 3000,
            'garantia'          => 1000,
            'puja'              => 100,
            'comision'          => 5,
            'started_at'        => Carbon::now(),
            'finalized_at'      => Carbon::now()->addYear(),
        ]);
        Producto::create([
            'user_id'           => 3,
            'empresa_id'        => 1,
            'lote_id'           => 1,
            'ciudad'            => 'Huanuco',
            'tipo_vehiculo'     => 'Vehiculo Pesado',
            'tipo_subasta'      => 'Subasta',
            'tipo_reserva'      => 'Sin Reserva',
            'nombre'            => 'NISSAN AXL 2005',
            'imagen'            => '8.jpg',
            'precio'            => 1600,
            'precio_reserva'    => 3000,
            'garantia'          => 1000,
            'puja'              => 100,
            'comision'          => 5,
            'started_at'        => Carbon::now(),
            'finalized_at'      => Carbon::now()->addYear(),
        ]);
        Producto::create([
            'user_id'           => 3,
            'empresa_id'        => 1,
            'lote_id'           => 1,
            'ciudad'            => 'Trujillo',
            'tipo_vehiculo'     => 'Vehiculo Ligero',
            'tipo_subasta'      => 'Compra',
            'tipo_reserva'      => 'Compra Directa',
            'nombre'            => 'KIA RIO 2001',
            'imagen'            => '9.jpg',
            'precio'            => 1700,
            'precio_reserva'    => 3000,
            'garantia'          => 1000,
            'puja'              => 100,
            'comision'          => 5,
            'started_at'        => Carbon::now(),
            'finalized_at'      => Carbon::now()->addYear(),
        ]);
        Producto::create([
            'user_id'           => 3,
            'empresa_id'        => 1,
            'lote_id'           => 1,
            'ciudad'            => 'Trujillo',
            'tipo_vehiculo'     => 'Vehiculo Ligero',
            'tipo_subasta'      => 'Subasta',
            'tipo_reserva'      => 'Con Reserva',
            'nombre'            => 'TOYOTA YARIS 2019',
            'imagen'            => '10.jpg',
            'precio'            => 900,
            'precio_reserva'    => 3000,
            'garantia'          => 1000,
            'puja'              => 100,
            'comision'          => 5,
            'started_at'        => Carbon::now(),
            'finalized_at'      => Carbon::now()->addYear(),
        ]);
        Producto::create([
            'user_id'           => 3,
            'empresa_id'        => 2,
            'lote_id'           => 3,
            'ciudad'            => 'Trujillo',
            'tipo_vehiculo'     => 'Vehiculo Ligero',
            'tipo_subasta'      => 'Subasta',
            'tipo_reserva'      => 'Sin Reserva',
            'nombre'            => 'KIA CERATO 2012',
            'imagen'            => '11.jpg',
            'precio'            => 1900,
            'precio_reserva'    => 3000,
            'garantia'          => 1000,
            'puja'              => 100,
            'comision'          => 5,
            'started_at'        => Carbon::now(),
            'finalized_at'      => Carbon::now()->addYear(),
        ]);
    }
}
