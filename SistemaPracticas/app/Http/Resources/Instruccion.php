<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Instruccion extends JsonResource
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
            'institucion'=> $this->institucion,
            'especializacion'=> $this->especializacion,
            'tituloObtenido'=>$this->tituloObtenido,
            'diploma'=>$this->diploma,
        ];
    }
}
