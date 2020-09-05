<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Business
 *
 * @property int $id
 * @property string $ruc
 * @property string $kind
 * @property string $phone
 * @property string $email
 * @property string $address
 * @property string $person_name
 * @property string $person_phone
 * @property string $person_email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Offer[] $offers
 * @property-read int|null $offers_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Business newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Business newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Business query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Business whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Business wherePersonEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Business whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Business whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Business whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Business wherePersonName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Business whereRuc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Business wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Business wherePersonPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Business whereKind($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Business whereUpdatedAt($value)
 * @mixin \Eloquent
 */

class Business extends Model
{
    protected $fillable = [
        'ruc','kind','phone','email','address','person_name','person_phone','person_email'
    ];

    public function offers(){
        return $this->hasMany('App\Offer');
    }
    public function user(){
        return $this->morphOne('App\User', 'userable');
    }
}
