<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Postulation extends JsonResource
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
            'intern_id'=>$this->intern_id,
            'offer_id'=>$this->offer_id,
            'state'=> $this ->state,
        ];
    }
}
