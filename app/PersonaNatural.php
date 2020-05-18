<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PersonaNatural extends Model
{
    use SoftDeletes;

    protected $table="persona_natural";
}
