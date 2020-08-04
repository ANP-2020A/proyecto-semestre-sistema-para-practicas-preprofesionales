<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Postulation
 *
 * @property int $id
 * @property int $state
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $intern_id
 * @property int $offer_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Postulation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Postulation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Postulation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Postulation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Postulation whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Postulation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Postulation whereOfferId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Postulation whereInternId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Postulation whereUpdatedAt($value)
 * @mixin \Eloquent
 */

class Postulation extends Model
{
    protected $fillable = ['state'];
}
