<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Carrera extends Model
{
    protected $fillable = ['nombre','institucion','semestre','numSemestres'];

    /*public static function boot(){
        parent::boot();
        static::creating(function ($article){
           $article->user_id = Auth::id();
        });
    }*/

    public function pasantes(){
        return $this->belongsTo('App\Pasante');
    }
}
