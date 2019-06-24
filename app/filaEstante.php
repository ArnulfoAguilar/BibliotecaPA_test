<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class filaEstante extends Model
{
    protected $fillable= [
        ID_BIBLIOTECA,ID_ESTANTE,NOMBRE,DESCRIPCION
    ];
}
