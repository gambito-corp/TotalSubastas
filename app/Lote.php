<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Lote extends Model
{
    use Softdeletes;
    protected $table= 'lote';
}
