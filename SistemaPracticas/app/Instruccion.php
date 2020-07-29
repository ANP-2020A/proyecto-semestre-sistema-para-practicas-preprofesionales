<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Instruccion extends Model
{
    protected $fillable = ['institucion','especializacion','tituloObtenido','diploma'];

    /*public static function boot(){
        parent::boot();
        static::creating(function ($instruccion){
            $instruccion->user_id = Auth::id();
        });
    }*/

    public function pasantes(){
        return $this->belongsTo('App\Pasante');
    }
}
