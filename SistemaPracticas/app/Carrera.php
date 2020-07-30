<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * App\Carrera
 *
 * @property int $id
 * @property string $nombre
 * @property string $institucion
 * @property int $semestre
 * @property int $numSemestres
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $pasante_id
 * @property-read \App\Pasante $pasantes
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Carrera newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Carrera newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Carrera query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Carrera whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Carrera whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Carrera whereInstitucion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Carrera whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Carrera whereNumSemestres($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Carrera wherePasanteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Carrera whereSemestre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Carrera whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
