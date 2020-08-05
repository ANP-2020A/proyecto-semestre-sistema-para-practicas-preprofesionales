<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Job extends JsonResource
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
            'start_date'=> $this->start_date,
            'finish_date'=> $this->finish_date,
            'enterprise'=> $this ->enterprise,
            'charge'=> $this->charge,
            'responsibility'=> $this->responsibility,
            'reason_why'=>$this->reason_why,
        ];
    }
}
