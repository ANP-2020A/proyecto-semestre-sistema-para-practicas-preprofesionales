<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
        'nombre','ruc','tipo','telefono','correo','direccion','nombreResponsable','teleponoResponsable','correoResponsable'
    ];

    public function ofertas(){
        return $this->hasMany('App\Oferta');
    }
}
