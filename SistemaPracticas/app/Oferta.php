<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Oferta extends Model
{
    protected $fillable = ['nombre','descripcion','direccion','remunerado','salario','jornada','horario','ciudad'];

    /*public static function boot(){
        parent::boot();
        static::creating(function ($oferta){
            $oferta->user_id = Auth::id();
        });
    }*/

    public function empresas(){
        return $this->belongsTo('App\Empresa');
    }
}
