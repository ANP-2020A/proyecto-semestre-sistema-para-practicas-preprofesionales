<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Eloquent;

/**
 * Class offer
 * @package App
 * @mixin Eloquent
 */

class Offer extends Model
{
    protected $fillable = ['name','description','address','paid','gain','shift','horario','city'];

    /*public static function boot(){
        parent::boot();
        static::creating(function ($offer){
            $offer->user_id = Auth::id();
        });
    }*/

    public function businesses(){
        return $this->belongsTo('App\Business');
    }

    public function interns(){
        return $this->belongsToMany('App\Intern','postulations');
    }
}
