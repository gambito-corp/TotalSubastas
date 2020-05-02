<?php

use App\avatar;
use App\User;
use Illuminate\Database\Seeder;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::all();
        for ($i=0; $i < 50; $i++) {
            $c = $i+1;
            $avatar= new avatar();
            $avatar->user_id = $user[$i]['id'];
            $avatar->nombre = 'Foto por Default de usuario '.$c;
            $avatar->descripcion = 'imagen de prueba';
            $avatar->slug = 'user'.$c.'.png';
            $avatar->save();
        }
    }
}
