<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Oferta extends JsonResource
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
            'id_empresa'=>$this->id_empresa,
            'nombre'=> $this ->nombre,
            'descripcion'=> $this->descripcion,
            'direccion'=> $this->direccion,
            'remunerado'=>$this->remunerado,
            'salario'=>$this->salario,
            'jornada'=>$this ->jornada,
            'horario'=>$this->horario,
            'ciudad'=>$this->ciudad,
        ];
    }
}
