<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $fillable = ['nombre','descripcion','direccion','remunerado','salario','jornada','horario','ciudad'];
}
