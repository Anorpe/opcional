<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dueno extends Model
{
    protected $table = 'dueno';
    protected $fillable = array('cedula', 'nombre');
}
