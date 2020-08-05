<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Intern extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=> $this->id,
            'document'=> $this ->document,
            'birth_date'=>$this->birth_date,
            'telephone'=>$this->telephone,
            'cellphone'=>$this->cellphone,
            'emergency_phone'=>$this->emergency_phone,
            'address'=>$this->address,
            'disability'=>$this->disability,
            'conadis_document'=>$this->conadis_document,
            'marital_status'=>$this->marital_status,
            'blood_type'=>$this->blood_type,
            'ethnicity'=>$this->ethnicity,
            'career'=>$this->career,
            'province'=>$this->province,
            'canton'=>$this->canton,
            'parish'=>$this->parish,
        ];
    }
}
