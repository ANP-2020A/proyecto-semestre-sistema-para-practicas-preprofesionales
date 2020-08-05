<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Offer extends JsonResource
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
            'business_id'=>$this->business_id,
            'name'=> $this ->name,
            'description'=> $this->description,
            'address'=> $this->address,
            'paid'=>$this->paid,
            'gain'=>$this->gain,
            'shift'=>$this ->shift,
            'schedule'=>$this->schedule,
            'city'=>$this->city,
        ];
    }
}
