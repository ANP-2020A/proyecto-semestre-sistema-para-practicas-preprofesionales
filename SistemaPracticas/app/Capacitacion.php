<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capacitacion extends Model
{
    protected $fillable = ['nombre','tipo','institucion','certificado','fechaInicio','fechaFin'];
}
