<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * App\Instruction
 *
 * @property int $id
 * @property string $institution
 * @property string $specialization
 * @property string $obtained_title
 * @property string $diploma
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $intern_id
 * @property-read \App\Pasante $interns
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instruction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instruction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instruction query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instruction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instruction whereDiploma($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instruction whereSpecialization($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instruction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instruction whereInstitution($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instruction whereInternId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instruction whereObtainedTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instruction whereUpdatedAt($value)
 * @mixin \Eloquent
 */

class Instruction extends Model
{
    protected $fillable = ['institution','specialization','obtained_title','diploma'];

    /*public static function boot(){
        parent::boot();
        static::creating(function ($instruction){
            $instruction->user_id = Auth::id();
        });
    }*/

    public function interns(){
        return $this->belongsTo('App\Intern');
    }
}
