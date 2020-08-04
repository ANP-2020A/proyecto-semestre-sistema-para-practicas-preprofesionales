<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Intern
 *
 * @property int $id
 * @property string $document
 * @property string $birth_date
 * @property string $telephone
 * @property string $cellphone
 * @property string $emergency_phone
 * @property string $address
 * @property int $disability
 * @property string $conadis_document
 * @property string $marital_status
 * @property string $blood_type
 * @property string $ethnicity
 * @property string $career
 * @property string $province
 * @property string $canton
 * @property string $parish
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Training[] $trainings
 * @property-read int|null $trainings_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Career[] $careers
 * @property-read int|null $careers_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Skill[] $skills
 * @property-read int|null $skills_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Instruction[] $instructions
 * @property-read int|null $instructions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Offer[] $offers
 * @property-read int|null $offers_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Job[] $jobs
 * @property-read int|null $jobs_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Intern newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Intern newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Intern query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Intern whereCanton($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Intern whereDisability($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Intern whereConadisDocument($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Intern whereCareer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Intern whereDocument($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Intern whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Intern whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Intern whereMaritalStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Intern whereEthnicity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Intern whereBirthDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Intern whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Intern whereParish($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Intern whereProvince($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Intern whereCellphone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Intern whereTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Intern whereEmergencyPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Intern whereBloodType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Intern whereUpdatedAt($value)
 * @mixin \Eloquent
 */

class Intern extends Model
{
    protected $fillable = [
        'document','birth_date','telephone','cellphone','emergency_phone','address','disability','conadis_document',
        'marital_status','blood_type','ethnicity','career','province','canton','parish'
    ];

    public function careers(){
        return $this->hasMany('App\Career');
    }
    public function skills(){
        return $this->hasMany('App\Skill');
    }
    public function instructions(){
        return $this->hasMany('App\Instruction');
    }
    public function jobs(){
        return $this->hasMany('App\Job');
    }
    public function trainings(){
        return $this->hasMany('App\Training');
    }

    /*La tabla POSTULATIONS debe ser especificada*/
    public function offers(){
        return $this->belongsToMany('App\Offer','postulations');
    }

}
