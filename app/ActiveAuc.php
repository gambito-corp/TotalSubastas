<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActiveAuc extends Model
{
//    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'producto_id',
        'user_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'            => 'integer',
        'producto_id'   => 'integer',
        'user_id'       => 'integer',
        'created_at'    => 'datetime',
        'updated_at'    => 'datetime',
//        'deleted_at'    => 'datetime',
    ];


    public function User()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    public function Producto()
    {
        return $this->belongsTo(Producto::class)->withDefault();
    }
}
