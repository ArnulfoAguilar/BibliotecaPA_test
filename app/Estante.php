<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estante extends Model
{
    protected $fillable = [
      ID_BIBLIOTECA, NOMBRE, DESCRIPCION
    ];
}
