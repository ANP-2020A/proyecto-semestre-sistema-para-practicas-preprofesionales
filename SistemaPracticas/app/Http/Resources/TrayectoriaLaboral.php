<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TrayectoriaLaboral extends JsonResource
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
            'fechaInicio'=> $this->fechaInicio,
            'fechaFin'=> $this->fechaFin,
            'empresa'=> $this ->empresa,
            'cargo'=> $this->cargo,
            'responsabilidades'=> $this->resposabilidades,
            'razonSalida'=>$this->sentence,
        ];
    }
}
