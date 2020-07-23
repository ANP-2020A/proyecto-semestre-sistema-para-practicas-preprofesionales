<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instruccion extends Model
{
    protected $fillable = ['institucion','especializacion','tituloObtenido','diploma'];
}
