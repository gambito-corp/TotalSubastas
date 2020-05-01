<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class rolespermisos extends Model
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
    public function rol()
    {
        return $this->belongsTo(roles::class, 'roles_id');
    }

    public function permiso()
    {
        return $this->belongsTo(permisos::class, 'permisos_id');
    }
}
