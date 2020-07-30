<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Capacitacion extends JsonResource
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
            'nombre'=> $this ->nombre,
            'id_pasante'=>$this->id_pasante,
            'tipo'=> $this->tipo,
            'institucion'=> $this->institucion,
            'certificado'=>$this->certificado,
            'fechaInicio'=> $this->fechaInicio,
            'fechaFin'=> $this->fechaFin,
        ];
    }
}
