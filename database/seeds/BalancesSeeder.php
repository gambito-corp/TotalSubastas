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
            'tipo'              => 'Deposito de garantia',
            'descripcion'       => 'Texto de Deposito de la Garantia',
            'boucher'           => 'img/boucher/1.jpg',
            'motivo'            => 'deposito inicial para test',
            'cuenta'            => 'campo cuenta',
            'transaccion_banco' => 'campo transaccion de banco',
            'abono_at'          => now()
        ]);
        Balance::create([
            'user_id'           => 2,
            'banco_id'          => 1,
            'monto'             => 1000000,
            'tipo'              => 'Deposito de garantia',
            'descripcion'       => 'Texto de Deposito de la Garantia',
            'boucher'           => 'img/boucher/1.jpg',
            'motivo'            => 'deposito inicial para test',
            'cuenta'            => 'campo cuenta',
            'transaccion_banco' => 'campo transaccion de banco',
            'abono_at'          => now()
        ]);
        Balance::create([
            'user_id'           => 12,
            'banco_id'          => 1,
            'monto'             => 1000000,
            'tipo'              => 'Deposito de garantia',
            'descripcion'       => 'Texto de Deposito de la Garantia',
            'boucher'           => 'img/boucher/1.jpg',
            'motivo'            => 'deposito inicial para test',
            'cuenta'            => 'campo cuenta',
            'transaccion_banco' => 'campo transaccion de banco',
            'abono_at'          => now()
        ]);
    }
}
