<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Instruction extends JsonResource
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
            'institution'=> $this->institution,
            'specialization'=> $this->specialization,
            'obtained_title'=>$this->obtained_title,
            'diploma'=>$this->diploma,
        ];
    }
}
