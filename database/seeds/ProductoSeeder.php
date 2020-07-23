<?php

use Illuminate\Database\Seeder;
use App\Producto;

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
            'imagen'            => 'img/vehiculos/ts001.png',
            'precio'            => 1000,
            'precio_reserva'    => 3000,
            'garantia'          => 1000,
            'puja'              => 100,
            'comision'          => 5,
            'started_at'        => '2020-07-20 15:55:00',
            'finalized_at'      => '2020-07-23 17:04:14'
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
            'imagen'            => 'img/vehiculos/ts002.png',
            'precio'            => 1000,
            'precio_reserva'    => 3000,
            'garantia'          => 1000,
            'puja'              => 100,
            'comision'          => 5,
            'started_at'        => '2020-07-20 15:55:00',
            'finalized_at'      => '2020-07-23 17:04:14'
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
            'imagen'            => 'img/vehiculos/ts003.png',
            'precio'            => 1100,
            'precio_reserva'    => 3000,
            'garantia'          => 1000,
            'puja'              => 100,
            'comision'          => 5,
            'started_at'        => '2020-07-20 15:55:00',
            'finalized_at'      => '2020-07-23 17:04:14'
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
            'imagen'            => 'img/vehiculos/ts004.png',
            'precio'            => 1200,
            'precio_reserva'    => 3000,
            'garantia'          => 1000,
            'puja'              => 100,
            'comision'          => 5,
            'started_at'        => '2020-07-20 15:55:00',
            'finalized_at'      => '2020-07-23 17:04:14'
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
            'imagen'            => 'img/vehiculos/ts005.png',
            'precio'            => 1300,
            'precio_reserva'    => 3000,
            'garantia'          => 1000,
            'puja'              => 100,
            'comision'          => 5,
            'started_at'        => '2020-07-20 15:55:00',
            'finalized_at'      => '2020-07-23 17:04:14'
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
            'imagen'            => 'img/vehiculos/ts006.png',
            'precio'            => 1400,
            'precio_reserva'    => 3000,
            'garantia'          => 1000,
            'puja'              => 100,
            'comision'          => 5,
            'started_at'        => '2020-07-20 15:55:00',
            'finalized_at'      => '2020-07-23 17:04:14'
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
            'imagen'            => 'img/vehiculos/ts007.png',
            'precio'            => 1500,
            'precio_reserva'    => 3000,
            'garantia'          => 1000,
            'puja'              => 100,
            'comision'          => 5,
            'started_at'        => '2020-07-20 15:55:00',
            'finalized_at'      => '2020-07-23 17:04:14'
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
            'imagen'            => 'img/vehiculos/ts008.png',
            'precio'            => 1600,
            'precio_reserva'    => 3000,
            'garantia'          => 1000,
            'puja'              => 100,
            'comision'          => 5,
            'started_at'        => '2020-07-20 15:55:00',
            'finalized_at'      => '2020-07-23 17:04:14'
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
            'imagen'            => 'img/vehiculos/ts009.png',
            'precio'            => 1700,
            'precio_reserva'    => 3000,
            'garantia'          => 1000,
            'puja'              => 100,
            'comision'          => 5,
            'started_at'        => '2020-07-20 15:55:00',
            'finalized_at'      => '2020-07-23 17:04:14'
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
            'imagen'            => 'img/vehiculos/ts010.png',
            'precio'            => 900,
            'precio_reserva'    => 3000,
            'garantia'          => 1000,
            'puja'              => 100,
            'comision'          => 5,
            'started_at'        => '2020-07-20 15:55:00',
            'finalized_at'      => '2020-07-23 17:04:14'
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
            'imagen'            => 'img/vehiculos/ts001.png',
            'precio'            => 1900,
            'precio_reserva'    => 3000,
            'garantia'          => 1000,
            'puja'              => 100,
            'comision'          => 5,
            'started_at'        => '2020-07-20 15:55:00',
            'finalized_at'      => '2020-07-23 17:04:14'
        ]);
    }
}
