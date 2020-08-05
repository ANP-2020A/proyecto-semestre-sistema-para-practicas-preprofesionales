<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Training extends JsonResource
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
            'type'=> $this->type,
            'institution'=> $this->institution,
            'certificate'=>$this->certificate,
            'start_date'=> $this->start_date,
            'finish_date'=> $this->finish_date,
        ];
    }
}
