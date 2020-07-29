<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasante extends Model
{
    protected $fillable = [
        'cedula','nombre','apellido','fechaNacimiento','telefonoConv','telefonoCelu','telefonoEmergencia','correo','direccion','capacidadEspecial','carnetConadis','estadoVCivil','tipoSangre','etnia','carrera','provincia','canton','parroquia'
    ];

    public function carreras(){
        return $this->hasMany('App\Carrera');
    }
    public function habilidads(){
        return $this->hasMany('App\Habilidad');
    }
    public function instruccions(){
        return $this->hasMany('App\Instruccion');
    }
    public function trayectorialaborals(){
        return $this->hasMany('App\TrayectoriaLaboral');
    }
    public function capacitacions(){
        return $this->hasMany('App\Capacitacion');
    }

    public function ofertas(){
        return $this->belongsToMany('App\Oferta','estudiante_postulacions');
    }

}


