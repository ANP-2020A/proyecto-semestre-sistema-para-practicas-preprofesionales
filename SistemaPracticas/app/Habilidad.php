<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * App\Habilidad
 *
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * @property float $porcentajeDominio
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $pasante_id
 * @property-read \App\Pasante $pasantes
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Habilidad newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Habilidad newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Habilidad query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Habilidad whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Habilidad whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Habilidad whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Habilidad whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Habilidad wherePasanteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Habilidad wherePorcentajeDominio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Habilidad whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
