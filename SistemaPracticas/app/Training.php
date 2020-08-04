<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * App\Training
 *
 * @property int $id
 * @property string $name
 * @property string $type
 * @property string $institution
 * @property string $certificate
 * @property string $start_date
 * @property string $finish_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $intern_id
 * @property-read \App\Intern $interns
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Training newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Training newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Training query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Training whereCertificate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Training whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Training whereFinishDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Training whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Training whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Training whereInstitution($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Training whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Training whereInternId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Training whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Training whereUpdatedAt($value)
 * @mixin \Eloquent
 */

class Training extends Model
{
    protected $fillable = ['name','type','institution','certificate','start_date','finish_date'];

    /*public static function boot(){
        parent::boot();
        static::creating(function ($training){
            $training->user_id = Auth::id();
        });
    }*/

    public function interns(){
        return $this->belongsTo('App\Intern');
    }
}
