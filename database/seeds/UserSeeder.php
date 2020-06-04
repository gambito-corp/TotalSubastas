<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->role_id = 1;
        $user->name = "gambitocorp";
        $user->username = "gambitocorp";
        $user->email = "asesor.pedro@gmail.com";
        $user->telefono = 960717583;
        $user->email_verified_at = Carbon::now();
        $user->telefono_verified_at = Carbon::now();
        $user->password = bcrypt('C4tntnox*+');
        $user->save();

        $user = new User();
        $user->role_id = 2;
        $user->username = "admin";
        $user->email = "admin@admin.com";
        $user->telefono = 999999999;
        $user->email_verified_at = Carbon::now();
        $user->telefono_verified_at = Carbon::now();
        $user->password = bcrypt('admin');
        $user->save();

        factory(User::class)->times(48)->create();
    }
}
