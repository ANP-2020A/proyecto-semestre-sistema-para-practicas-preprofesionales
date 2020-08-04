<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * App\Job
 *
 * @property int $id
 * @property string $start_date
 * @property string $finish_date
 * @property string $enterprise
 * @property string $charge
 * @property string $responsibility
 * @property string $reason_why
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $intern_id
 * @property-read \App\Pasante $interns
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job whereCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job whereEnterprise($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job whereFinishDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job whereInternId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job whereReasonWhy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job whereResponsibility($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Job whereUpdatedAt($value)
 * @mixin \Eloquent
 */

class Job extends Model
{
    protected $fillable = ['start_date','finish_date','enterprise','charge','reason_why'];

    /*public static function boot(){
        parent::boot();
        static::creating(function ($job){
            $job->user_id = Auth::id();
        });
    }*/

    public function interns(){
        return $this->belongsTo('App\Intern');
    }

}
