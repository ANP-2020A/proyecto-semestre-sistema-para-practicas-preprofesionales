<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * App\TrayectoriaLaboral
 *
 * @property int $id
 * @property string $fechaInicio
 * @property string $fechaFin
 * @property string $empresa
 * @property string $cargo
 * @property string $responsabilidades
 * @property string $razonSalida
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $pasante_id
 * @property-read \App\Pasante $pasantes
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TrayectoriaLaboral newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TrayectoriaLaboral newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TrayectoriaLaboral query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TrayectoriaLaboral whereCargo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TrayectoriaLaboral whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TrayectoriaLaboral whereEmpresa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TrayectoriaLaboral whereFechaFin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TrayectoriaLaboral whereFechaInicio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TrayectoriaLaboral whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TrayectoriaLaboral wherePasanteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TrayectoriaLaboral whereRazonSalida($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TrayectoriaLaboral whereResponsabilidades($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TrayectoriaLaboral whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
