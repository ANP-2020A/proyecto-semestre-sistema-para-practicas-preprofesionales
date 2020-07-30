<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Habilidad extends JsonResource
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
            'nombre'=> $this ->nombre,
            'descripcion'=> $this->descripcion,
            'porcentajeDominio'=> $this->porcentajeDominio,
        ];
    }
}
