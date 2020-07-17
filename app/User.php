<?php

namespace App;

use App\Events\User\UserCreated;
use App\Events\User\UserUpdated;
use App\Events\User\UserDeleted;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User extends \TCG\Voyager\Models\User implements MustVerifyEmail
{
    use Notifiable;
    use SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The event map for the model.
     *
     * Allows for object-based events for native Eloquent events.
     *
     * @var array
     */
    protected $dispatchesEvents = [
        'created' => UserCreated::class,
        'updated' => UserUpdated::class,
        'deleted' => UserDeleted::class,
    ];

    //Metodos Personalizados
    public static function registerUser(array $data)
    {
        DB::transaction(function()use($data){
            User::create([
                'role_id' => 2,
                'name' => substr($data['nombre'],0,3).substr($data['apellido'],0,3).substr($data['dni'],0,3),
                'email' => $data['email'],
                'avatar' => 'users/default.png',
                'password' => Hash::make($data['password']),
            ]);

            Person::create([

                'nombres' => $data['nombre'],
                'apellidos' => $data['apellido'],
                'numero_documento' => $data['dni'],
                'telefono'=> $data['tel'],
                'email' => $data['email'],
            ]);
        });
    }


    //Relaciones
    public function ranking()
    {
        return $this->belongsTo(Ranking::class);
    }

}
