<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Pasante extends JsonResource
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
            'cedula'=> $this ->cedula,
                /*'nombre'=> $this->nombre,
                'apellido'=> $this->apellido,*/
            'fechaNacimiento'=>$this->fechaNacimiento,
            'telefonoConv'=>$this->telefonoConv,
            'telefonoCelu'=>$this->telefonoCelu,
            'telefonoEmergencia'=>$this->telefonoEmergencia,
            'correo'=>$this->correo,
            'direccion'=>$this->direccion,
            'capacidadEspecial'=>$this->capacidadEspecial,
            'carnetConadis'=>$this->carnetConadis,
            'estadoCivil'=>$this->estadoCivil,
            'tipoSangre'=>$this->tipoSangre,
            'etnia'=>$this->etnia,
            'carrera'=>$this->carrera,
            'provincia'=>$this->provincia,
            'canton'=>$this->canton,
            'parroquia'=>$this->parroquia,
        ];
    }
}
