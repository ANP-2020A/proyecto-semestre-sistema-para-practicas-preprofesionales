<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EstudiantePostulacion extends JsonResource
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
            'id_pasante'=>$this->id_pasante,
            'id_oferta'=>$this->id_oferta,
            'estado'=> $this ->estado,
        ];
    }
}
