<?php

namespace App;

use App\Events\User\UserCreated;
use App\Events\User\UserUpdated;
use App\Events\User\UserDeleted;
use App\Notifications\NuevoUsuarioRegistrado;
use App\Notifications\ReseteoDelPassword;
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
    protected $guarded = [

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

    //Metodos Sobreescritos

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ReseteoDelPassword($token));
    }

    //Metodos Personalizados
    public static function registerUser(array $data, $tipo)
    {
        $correlativo = User::all()->count();
        if($tipo == 'natural'){
            $rol = 2;
            $nombre = strtoupper(substr($data['nombre'],0,2).substr($data['apellido'],0,2).substr($data['dni'],0,2).$correlativo);
        }elseif($tipo == 'juridica'){
            $rol = 3;
            $nombre = strtoupper($data['nombre']);
        }

        $user = new User();
        DB::transaction(function()use($data, $tipo, $nombre, $rol){
            $user = User::create([
                'role_id' => $rol,
                'name' => $nombre,
                'email' => $data['email'],
                'avatar' => 'default.png',
                'password' => Hash::make($data['password']),
                'completo' => false,
                'tipo' => $tipo
            ]);
            if($tipo == 'natural'){
                Person::create([
                    'user_id' => $user->id,
                    'nombres' => $data['nombre'],
                    'apellidos' => $data['apellido'],
                    'numero_documento' => $data['dni'],
                    'telefono'=> $data['tel'],
                    'email' => $data['email'],
                ]);
            }elseif($tipo == 'juridica'){
                LegalPerson::create([
                    'user_id'           => $user->id,
                    'banco_id'          => $data['banco_id'],
                    'nombre'            => $data['nombre'],
                    'razon_social'      => $data['razon_social'],
                    'ruc'               => $data['ruc'],
                    'numero_cuenta'     => $data['numero_cuenta'],
                    'telefono'          => $data['tel'],
                    'email'             => $data['email']
                ]);
            }
        });
        $user = User::where('email', $data['email'])->first();
        $user->notify(new NuevoUsuarioRegistrado());
        return $user;
    }

    public function isAdmin() {
        return $this->Rol()->where('name', 'Admin')->exists();
    }
    public function isEmpresa() {
        return $this->Rol()->where('name', 'Admin')->orWhere('name', 'Empresa')->exists();
    }
    public function OnlyEmpresa() {
        return $this->Rol()->Where('name', 'Empresa')->exists();
    }

    public function puedePersonificar()
    {
        return $this->isAdmin();
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

    //hasOne
    public function Balance()
    {
        return $this->hasOne(Balance::class, 'user_id');
    }
    public function Persona()
    {
        return $this->hasOne(Person::class, 'user_id');
    }

}
