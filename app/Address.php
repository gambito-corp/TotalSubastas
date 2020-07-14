<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use VoyagerRelationSelector\Traits\RelationModel;


class Address extends Model
{
    use SoftDeletes;
    use RelationModel;



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

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
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

   //Scope
    public function scopePais($query)
    {

        dd($query);
//        $query = Department::where('pais_id', 1)->get();

        return $query;
    }

    public function scopeDepartamento($query, $departamento_id)
    {
        ddd('holi', $query);
        return $query->where('pais_id', $departamento_id);
        // return 'hola mundo';   ç 
    }
}
