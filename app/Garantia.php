<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Garantia extends Model
{
    use SoftDeletes;

    protected $table = 'garantias';

    protected $guarded=[];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    public function Usuario()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function Producto()
    {
        return $this->belongsTo('App\Producto', 'producto_id');
    }
}
