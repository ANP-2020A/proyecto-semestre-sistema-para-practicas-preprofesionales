<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Habilidad extends Model
{
    protected $fillable = ['nombre','descripcion','porcetanjeDominio'];

    /*public static function boot(){
        parent::boot();
        static::creating(function ($habilidad){
            $habilidad->user_id = Auth::id();
        });
    }*/

    public function pasantes(){
        return $this->belongsTo('App\Pasante');
    }
}
