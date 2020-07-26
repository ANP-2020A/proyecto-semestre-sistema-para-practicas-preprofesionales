<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class TrayectoriaLaboral extends Model
{
    protected $fillable = ['fechaInicio','fechaFin','empresa','cargo','razonSalida'];

    /*public static function boot(){
        parent::boot();
        static::creating(function ($trayectorialaboral){
            $trayectorialaboral->user_id = Auth::id();
        });
    }*/

    public function pasantes(){
        return $this->belongsTo('App\Pasante');
    }
}
