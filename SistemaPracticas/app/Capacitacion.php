<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Capacitacion extends Model
{
    protected $fillable = ['nombre','tipo','institucion','certificado','fechaInicio','fechaFin'];

    /*public static function boot(){
        parent::boot();
        static::creating(function ($capacitacion){
            $capacitacion->user_id = Auth::id();
        });
    }*/

    public function pasantes(){
        return $this->belongsTo('App\Pasante');
    }
}
