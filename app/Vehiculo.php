<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    //
    protected $table = 'vehiculo';
    protected $fillable = array('placa', 'marca','dueno_cedula');
}
