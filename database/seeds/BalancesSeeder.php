<?php

use Illuminate\Database\Seeder;
use App\Balance;

class BalancesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Balance::create([
            'user_id'           => 1,
            'banco_id'          => 1,
            'monto'             => 1000000,
            'tipo'              => 'Deposito de garantia Pedro',
            'descripcion'       => 'Deposito de la Garantia testeos Pedro',
            'boucher'           => 'img/boucher/1.jpg',
            'motivo'            => 'deposito inicial para test Pedro',
            'cuenta'            => 'campo cuenta',
            'transaccion_banco' => 'campo transaccion de banco',
            'abono_at'          => now()
        ]);
        Balance::create([
            'user_id'           => 2,
            'banco_id'          => 2,
            'monto'             => 1000000,
            'tipo'              => 'Deposito de garantia Javier',
            'descripcion'       => 'Deposito de la Garantia testeos Javier',
            'boucher'           => 'img/boucher/1.jpg',
            'motivo'            => 'deposito inicial para test Javier',
            'cuenta'            => 'campo cuenta',
            'transaccion_banco' => 'campo transaccion de banco',
            'abono_at'          => now()
        ]);
        Balance::create([
            'user_id'           => 3,
            'banco_id'          => 3,
            'monto'             => 1000000,
            'tipo'              => 'Deposito de garantia Gonzalo',
            'descripcion'       => 'Deposito de la Garantia testeos Gonzalo',
            'boucher'           => 'img/boucher/1.jpg',
            'motivo'            => 'deposito inicial para test Gonzalo',
            'cuenta'            => 'campo cuenta',
            'transaccion_banco' => 'campo transaccion de banco',
            'abono_at'          => now()
        ]);
    }
}
