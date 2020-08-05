<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Skill extends JsonResource
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
            'intern_id'=>$this->intern_id,
            'name'=> $this ->name,
            'description'=> $this->description,
            'percent'=> $this->percent,
        ];
    }
}
