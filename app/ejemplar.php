<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ejemplar extends Model
{
    protected $fillable = [
        ISBN, EJEMPLAR, AUTOR, PORTADA,
        DESCRIPCION, PALABRAS_CLAVE,NUMERO_PAGINAS,
        NUMERO_COPIAS, ID_AUTOR, ID_CATEGORIA
        ];
}
