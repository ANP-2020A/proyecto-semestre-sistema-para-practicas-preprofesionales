<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Empresa
 *
 * @property int $id
 * @property string $nombre
 * @property string $ruc
 * @property string $tipo
 * @property string $telefono
 * @property string $correo
 * @property string $direccion
 * @property string $nombreResponsable
 * @property string $telefonoResponsable
 * @property string $correoResponsable
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Oferta[] $ofertas
 * @property-read int|null $ofertas_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empresa newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empresa newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empresa query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empresa whereCorreo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empresa whereCorreoResponsable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empresa whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empresa whereDireccion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empresa whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empresa whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empresa whereNombreResponsable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empresa whereRuc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empresa whereTelefono($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empresa whereTelefonoResponsable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empresa whereTipo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Empresa whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Empresa extends Model
{
    protected $fillable = [
        'nombre','ruc','tipo','telefono','correo','direccion','nombreResponsable','teleponoResponsable','correoResponsable'
    ];

    public function ofertas(){
        return $this->hasMany('App\Oferta');
    }
}
