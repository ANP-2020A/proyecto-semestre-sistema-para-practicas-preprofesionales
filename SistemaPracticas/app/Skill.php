<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * App\Skill
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property float $percent
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $intern_id
 * @property-read \App\Pasante $interns
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Skill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Skill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Skill query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Skill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Skill whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Skill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Skill whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Skill whereInternId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Skill wherePercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Skill whereUpdatedAt($value)
 * @mixin \Eloquent
 */

class Skill extends Model
{
    protected $fillable = ['name','description','percent'];

    /*public static function boot(){
        parent::boot();
        static::creating(function ($skill){
            $skill->user_id = Auth::id();
        });
    }*/

    public function interns(){
        return $this->belongsTo('App\Intern');
    }
}
