<?php

namespace App;

use App\Events\User\UserCreated;
use App\Events\User\UserUpdated;
use App\Events\User\UserDeleted;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable implements MustVerifyEmail
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
        $user = new User();
        $test = DB::transaction(function()use($data, $user){
            $user = User::create([
                'role_id' => 2,
                'name' => substr($data['nombre'],0,3).substr($data['apellido'],0,3).substr($data['dni'],0,3),
                'email' => $data['email'],
                'avatar' => 'users/default.png',
                'password' => Hash::make($data['password']),
            ]);

            Person::create([
                'user_id' => $user->id,
                'nombres' => $data['nombre'],
                'apellidos' => $data['apellido'],
                'numero_documento' => $data['dni'],
                'telefono'=> $data['tel'],
                'email' => $data['email'],
            ]);
        });
        return User::where('email', $data['email'])->first();
    }
    public function puedePersonificar()
    {
        return $this->Rol->name == 'Admin';
    }


    //Relaciones
    public function Rol()
    {
        return $this->belongsTo(Rol::class, 'role_id');
    }

    public function ranking()
    {
        return $this->belongsTo(Ranking::class);
    }

}
