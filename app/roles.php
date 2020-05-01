<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class roles extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $hidden = [];

    protected $casts = [
        'created_at'        => 'datetime',
        'updated_at'        => 'datetime',
        'deleted_at'        => 'datetime',
    ];

    /**
    * Iniciamos con las relaciones
    *
    * @funcion de relacion
    */
    public function rolespermiso()
    {
        return $this->hasMany(rolespermisos::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }

}
