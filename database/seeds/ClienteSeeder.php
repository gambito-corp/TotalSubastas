<?php

use App\avatar;
use App\cliente;
use Illuminate\Database\Seeder;
use App\User;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios = User::all();
        $avatares = avatar::all();

        for ($i=3; $i < 50; $i++) {
            if($usuarios[$i]->roles_id == 4){
                $cliente = new cliente();
                $cliente->user_id = $usuarios[$i]->id;
                $cliente->avatar_id = $avatares[$i]->id;
                $cliente->save();
            }
        }


    }
}
