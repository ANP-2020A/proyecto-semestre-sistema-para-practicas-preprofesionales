<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrayectoriaLaboral extends Model
{
    protected $fillable = ['fechaInicio','fechaFin','empresa','cargo','razonSalida'];
}
