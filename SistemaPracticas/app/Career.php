<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * App\Career
 *
 * @property int $id
 * @property string $name
 * @property string $institution
 * @property int $semester
 * @property int $semester_num
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $intern_id
 * @property-read \App\Intern $interns
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Career newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Career newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Career query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Career whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Career whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Career whereInstitution($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Career whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Career whereSemesterNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Career whereInternId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Career whereSemester($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Career whereUpdatedAt($value)
 * @mixin \Eloquent
 */

class Career extends Model
{
    protected $fillable = ['name','institution','semester','semester_num'];

    /*public static function boot(){
        parent::boot();
        static::creating(function ($career){
           $career->user_id = Auth::id();
        });
    }*/

    public function interns(){
        return $this->belongsTo('App\Intern');
    }
}
