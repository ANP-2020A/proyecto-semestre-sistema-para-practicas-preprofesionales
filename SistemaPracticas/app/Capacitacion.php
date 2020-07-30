<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * App\Capacitacion
 *
 * @property int $id
 * @property string $nombre
 * @property string $tipo
 * @property string $institucion
 * @property string $certificado
 * @property string $fechaInicio
 * @property string $fechaFin
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $pasante_id
 * @property-read \App\Pasante $pasantes
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Capacitacion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Capacitacion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Capacitacion query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Capacitacion whereCertificado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Capacitacion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Capacitacion whereFechaFin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Capacitacion whereFechaInicio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Capacitacion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Capacitacion whereInstitucion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Capacitacion whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Capacitacion wherePasanteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Capacitacion whereTipo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Capacitacion whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
