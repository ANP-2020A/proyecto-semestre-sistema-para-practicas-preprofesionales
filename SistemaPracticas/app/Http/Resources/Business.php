<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Business extends JsonResource
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
            'name'=> $this->name,
            'ruc'=> $this->ruc,
            'kind'=> $this ->kind,
            'phone'=> $this->phone,
            'email'=> $this->email,
            'address'=>$this->address,

            'person_name'=>$this->person_name,
            'person_phone'=> $this->person_phone,
            'person_email'=> $this->person_email,
        ];
    }
}
