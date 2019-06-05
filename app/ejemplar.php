<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ejemplar extends Model
{
    protected $fillable = [
        nombre, isbn, author, portada, descripcion
        ];
}
