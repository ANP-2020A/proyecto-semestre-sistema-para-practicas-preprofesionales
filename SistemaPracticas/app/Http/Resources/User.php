<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class User extends JsonResource
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
            'User_id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
/*            'userable_id' => $this->userable_id,*/
            'userable_type' => $this->userable_type,
            $this->merge($this->userable),
        ];
    }
}
