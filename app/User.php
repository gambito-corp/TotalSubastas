<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

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
        'telefono_verified_at' => 'datetime',
        'created_at'        => 'datetime',
        'updated_at'        => 'datetime',
        'deleted_at'        => 'datetime',
    ];

    /**
     * Iniciamos con las relaciones
     *
     * @funcion de relacion
     */
    public function rol()
    {
        return $this->belongsTo(roles::class, 'roles_id');
    }

    //relaciones hasmany
    public function avatars()
    {
        return $this->hasMany(avatar::class);
    }

    public function direcciones()
    {
        return $this->hasMany(direccion::class);
    }

    public function clientes()
    {
        return $this->hasMany(cliente::class);
    }

    public function cliente_naturales()
    {
        return $this->hasMany(cliente_natural::class);
    }
}
