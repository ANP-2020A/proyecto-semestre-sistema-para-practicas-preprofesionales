<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Eloquent;

/**
 * Class Oferta
 * @package App
 * @mixin Eloquent
 */
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

    public function pasantes(){
        return $this->belongsToMany('App\Pasante','estudiante_postulacions');
    }
}
