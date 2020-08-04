<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Career extends JsonResource
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
            'name'=> $this ->name,
            'institution'=> $this->institution,
            'semester'=> $this->semester,
            'semester_num'=>$this->semester_num,
        ];
    }
}
