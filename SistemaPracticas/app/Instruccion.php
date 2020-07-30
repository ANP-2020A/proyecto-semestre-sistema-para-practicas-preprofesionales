<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * App\Instruccion
 *
 * @property int $id
 * @property string $institucion
 * @property string $especializacion
 * @property string $tituloObtenido
 * @property string $diploma
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $pasante_id
 * @property-read \App\Pasante $pasantes
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instruccion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instruccion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instruccion query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instruccion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instruccion whereDiploma($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instruccion whereEspecializacion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instruccion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instruccion whereInstitucion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instruccion wherePasanteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instruccion whereTituloObtenido($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instruccion whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
