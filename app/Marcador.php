<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Marcador extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'producto_id',
        'user_id'
    ];

    protected $casts = [
        'id'            => 'integer',
        'producto_id'   => 'integer',
        'user_id'       => 'integer',
        'created_at'    => 'datetime',
        'updated_at'    => 'datetime',
        'deleted_at'    => 'datetime',
    ];

    //Relaciones Belongs to

}
