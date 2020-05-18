<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class EstadoCivil extends Model
{
    use SoftDeletes;
    protected $table= 'estado_civil';
}
