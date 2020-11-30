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
            'monto'             => 3,
            'tipo'              => 'Deposito de garantia Pedro',
            'descripcion'       => 'Deposito de la Garantia testeos Pedro',
            'boucher'           => '',
            'motivo'            => 'deposito inicial para test Pedro',
            'cuenta'            => 'campo cuenta',
            'transaccion_banco' => 'campo transaccion de banco',
            'abono_at'          => now(),
            'aprobado'          => true
        ]);
    }
}
