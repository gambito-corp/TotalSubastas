<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;
    use SoftDeletes;

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
        'id' => 'string',
        'email_verified_at' => 'datetime',
    ];
    public function canImpersonate($userId = null)
    {
        return $this->id === 1 && $this->id !== $userId;
    }
    //Relaciones
    public function Rol()
    {
        return $this->belongsTo(Rol::class, 'roles_id');
    }
    public function imagenes()
    {
        return $this->HasMany(Avatar::class);
    }
}
