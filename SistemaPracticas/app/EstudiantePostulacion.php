<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\EstudiantePostulacion
 *
 * @property int $id
 * @property int $estado
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $pasante_id
 * @property int $oferta_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EstudiantePostulacion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EstudiantePostulacion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EstudiantePostulacion query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EstudiantePostulacion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EstudiantePostulacion whereEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EstudiantePostulacion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EstudiantePostulacion whereOfertaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EstudiantePostulacion wherePasanteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\EstudiantePostulacion whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class EstudiantePostulacion extends Model
{
    protected $fillable = ['estado'];
}
