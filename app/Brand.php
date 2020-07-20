<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use VoyagerRelationSelector\Traits\RelationModel;


class Brand extends Model
{
    use SoftDeletes;
    protected $fillable = ['nombre', 'slug'];
}
