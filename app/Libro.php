<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $fillable = [
        CODIGO_BARRA, COPIA_NUMERO,ID_EJEMPLAR,
        ID_FILA, ID_BIBLIOTECA, ID_ESTANTE
    ];
}
