<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Empresa extends JsonResource
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
            'nombre'=> $this->nombre,
            'ruc'=> $this->ruc,
            'tipo'=> $this ->tipo,
            'telefono'=> $this->telefono,
            'correo'=> $this->correo,
            'direccion'=>$this->direccion,
            'nombreResponsable'=>$this->nombreResponsable,
            'telefonoResponsable'=> $this->telefonoResponsable,
            'correoResponsable'=> $this->correoResponsable,
        ];
    }
}
