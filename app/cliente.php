<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cliente extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'clientes';

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
    protected $hidden = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
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
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function avatar()
    {
        return $this->belongsTo(avatar::class, 'avatar_id');
    }
    public function direccion()
    {
        return $this->belongsTo(direccion::class, 'direccion_id');
    }

    public function cliente_naturales()
    {
        return $this->hasMany(cliente_natural::class);
    }
}
