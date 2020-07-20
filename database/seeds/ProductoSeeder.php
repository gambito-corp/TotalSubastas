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
            'nombre'            => 'TOYOTA YARIS 2015',
            'imagen'            => 'img/vehiculos/coche.png',
            'precio'            => 1000,
            'precio_reserva'    => 3000,
            'garantia'          => 1000,
            'puja'              => 100,
            'comision'          => 5,
            'started_at'        => '2020-06-13 15:55:00',
            'finalized_at'      => '2020-07-20 17:04:14'
        ]);
        Producto::create([
            'user_id'           => 3,
            'empresa_id'        => 4,
            'lote_id'           => 7,
            'ciudad'            => 'Lima',
            'tipo_vehiculo'     => 'Vehiculo Ligero',
            'tipo_subasta'      => 'Subasta',
            'tipo_reserva'      => 'Sin Reserva',
            'nombre'            => 'CHEVROLET SAIL 2015',
            'imagen'            => 'img/vehiculos/coche.png',
            'precio'            => 1000,
            'precio_reserva'    => 3000,
            'garantia'          => 1000,
            'puja'              => 100,
            'comision'          => 5,
            'started_at'        => '2020-06-13 15:55:00',
            'finalized_at'      => '2020-07-20 17:04:14'
        ]);
        Producto::create([
            'user_id'           => 3,
            'empresa_id'        => 1,
            'lote_id'           => 2,
            'ciudad'            => 'Lima',
            'tipo_vehiculo'     => 'Vehiculo Pesado',
            'tipo_subasta'      => 'Compra',
            'tipo_reserva'      => 'Compra Directa',
            'nombre'            => 'TOYOTA YARIS 2014',
            'imagen'            => 'img/vehiculos/coche.png',
            'precio'            => 1100,
            'precio_reserva'    => 3000,
            'garantia'          => 1000,
            'puja'              => 100,
            'comision'          => 5,
            'started_at'        => '2020-06-13 15:55:00',
            'finalized_at'      => '2020-07-20 17:04:14'
        ]);
        Producto::create([
            'user_id'           => 3,
            'empresa_id'        => 2,
            'lote_id'           => 3,
            'ciudad'            => 'Lima',
            'tipo_vehiculo'     => 'Vehiculo Pesado',
            'tipo_subasta'      => 'Subasta',
            'tipo_reserva'      => 'Con Reserva',
            'nombre'            => 'TOYOTA YARIS 2013',
            'imagen'            => 'img/vehiculos/coche.png',
            'precio'            => 1200,
            'precio_reserva'    => 3000,
            'garantia'          => 1000,
            'puja'              => 100,
            'comision'          => 5,
            'started_at'        => '2020-06-13 15:55:00',
            'finalized_at'      => '2020-07-20 17:04:14'
        ]);
        Producto::create([
            'user_id'           => 3,
            'empresa_id'        => 2,
            'lote_id'           => 4,
            'ciudad'            => 'Huanuco',
            'tipo_vehiculo'     => 'Vehiculo Ligero',
            'tipo_subasta'      => 'Subasta',
            'tipo_reserva'      => 'Sin Reserva',
            'nombre'            => 'TOYOTA YARIS 2012',
            'imagen'            => 'img/vehiculos/coche.png',
            'precio'            => 1300,
            'precio_reserva'    => 3000,
            'garantia'          => 1000,
            'puja'              => 100,
            'comision'          => 5,
            'started_at'        => '2020-06-13 15:55:00',
            'finalized_at'      => '2020-07-20 17:04:14'
        ]);
        Producto::create([
            'user_id'           => 3,
            'empresa_id'        => 3,
            'lote_id'           => 5,
            'ciudad'            => 'Huanuco',
            'tipo_vehiculo'     => 'Vehiculo Ligero',
            'tipo_subasta'      => 'Compra',
            'tipo_reserva'      => 'Compra Directa',
            'nombre'            => 'TOYOTA YARIS 2011',
            'imagen'            => 'img/vehiculos/coche.png',
            'precio'            => 1400,
            'precio_reserva'    => 3000,
            'garantia'          => 1000,
            'puja'              => 100,
            'comision'          => 5,
            'started_at'        => '2020-06-13 15:55:00',
            'finalized_at'      => '2020-07-20 17:04:14'
        ]);
        Producto::create([
            'user_id'           => 3,
            'empresa_id'        => 3,
            'lote_id'           => 6,
            'ciudad'            => 'Huanuco',
            'tipo_vehiculo'     => 'Vehiculo Ligero',
            'tipo_subasta'      => 'Subasta',
            'tipo_reserva'      => 'Con Reserva',
            'nombre'            => 'TOYOTA YARIS 2010',
            'imagen'            => 'img/vehiculos/coche.png',
            'precio'            => 1500,
            'precio_reserva'    => 3000,
            'garantia'          => 1000,
            'puja'              => 100,
            'comision'          => 5,
            'started_at'        => '2020-06-13 15:55:00',
            'finalized_at'      => '2020-07-20 17:04:14'
        ]);
        Producto::create([
            'user_id'           => 3,
            'empresa_id'        => 1,
            'lote_id'           => 1,
            'ciudad'            => 'Huanuco',
            'tipo_vehiculo'     => 'Vehiculo Pesado',
            'tipo_subasta'      => 'Subasta',
            'tipo_reserva'      => 'Sin Reserva',
            'nombre'            => 'NISSAN SENTRA 2005',
            'imagen'            => 'img/vehiculos/coche.png',
            'precio'            => 1600,
            'precio_reserva'    => 3000,
            'garantia'          => 1000,
            'puja'              => 100,
            'comision'          => 5,
            'started_at'        => '2020-06-13 15:55:00',
            'finalized_at'      => '2020-07-20 17:04:14'
        ]);
        Producto::create([
            'user_id'           => 3,
            'empresa_id'        => 1,
            'lote_id'           => 1,
            'ciudad'            => 'Trujillo',
            'tipo_vehiculo'     => 'Vehiculo Ligero',
            'tipo_subasta'      => 'Compra',
            'tipo_reserva'      => 'Compra Directa',
            'nombre'            => 'MAZDA 3 2010',
            'imagen'            => 'img/vehiculos/coche.png',
            'precio'            => 1700,
            'precio_reserva'    => 3000,
            'garantia'          => 1000,
            'puja'              => 100,
            'comision'          => 5,
            'started_at'        => '2020-06-13 15:55:00',
            'finalized_at'      => '2020-07-20 17:04:14'
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
            'imagen'            => 'img/vehiculos/coche.png',
            'precio'            => 900,
            'precio_reserva'    => 3000,
            'garantia'          => 1000,
            'puja'              => 100,
            'comision'          => 5,
            'started_at'        => '2020-06-13 15:55:00',
            'finalized_at'      => '2020-07-20 17:04:14'
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
            'imagen'            => 'img/vehiculos/coche.png',
            'precio'            => 1900,
            'precio_reserva'    => 3000,
            'garantia'          => 1000,
            'puja'              => 100,
            'comision'          => 5,
            'started_at'        => '2020-06-13 15:55:00',
            'finalized_at'      => '2020-07-20 17:04:14'
        ]);
    }
}
