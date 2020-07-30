<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Pasante
 *
 * @property int $id
 * @property string $cedula
 * @property string $fechaNacimiento
 * @property string $telefonoConv
 * @property string $telefonoCelu
 * @property string $telefonoEmergencia
 * @property string $correo
 * @property string $direccion
 * @property int $capacidadEspecial
 * @property string $carnetConadis
 * @property string $estadoCivil
 * @property string $tipoSangre
 * @property string $etnia
 * @property string $carrera
 * @property string $provincia
 * @property string $canton
 * @property string $parroquia
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Capacitacion[] $capacitacions
 * @property-read int|null $capacitacions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Carrera[] $carreras
 * @property-read int|null $carreras_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Habilidad[] $habilidads
 * @property-read int|null $habilidads_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Instruccion[] $instruccions
 * @property-read int|null $instruccions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Oferta[] $ofertas
 * @property-read int|null $ofertas_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\TrayectoriaLaboral[] $trayectorialaborals
 * @property-read int|null $trayectorialaborals_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pasante newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pasante newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pasante query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pasante whereCanton($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pasante whereCapacidadEspecial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pasante whereCarnetConadis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pasante whereCarrera($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pasante whereCedula($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pasante whereCorreo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pasante whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pasante whereDireccion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pasante whereEstadoCivil($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pasante whereEtnia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pasante whereFechaNacimiento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pasante whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pasante whereParroquia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pasante whereProvincia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pasante whereTelefonoCelu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pasante whereTelefonoConv($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pasante whereTelefonoEmergencia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pasante whereTipoSangre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pasante whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Pasante extends Model
{
    protected $fillable = [
        'cedula','nombre','apellido','fechaNacimiento','telefonoConv','telefonoCelu','telefonoEmergencia','correo','direccion','capacidadEspecial','carnetConadis','estadoVCivil','tipoSangre','etnia','carrera','provincia','canton','parroquia'
    ];

    public function carreras(){
        return $this->hasMany('App\Carrera');
    }
    public function habilidads(){
        return $this->hasMany('App\Habilidad');
    }
    public function instruccions(){
        return $this->hasMany('App\Instruccion');
    }
    public function trayectorialaborals(){
        return $this->hasMany('App\TrayectoriaLaboral');
    }
    public function capacitacions(){
        return $this->hasMany('App\Capacitacion');
    }

    public function ofertas(){
        return $this->belongsToMany('App\Oferta','estudiante_postulacions');
    }

}


