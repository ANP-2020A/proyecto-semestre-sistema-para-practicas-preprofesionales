<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasante extends Model
{
    protected $fillable = ['cedula','nombre','apellido','fechaNacimiento','telefonoConv','telefonoCelu','telefonoEmergencia','correo','direccion','capacidadEspecial','carnetConadis','estadoVCivil','tipoSangre','etnia','carrera','provincia','canton','parroquia'];
}
