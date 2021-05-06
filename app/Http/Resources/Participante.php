<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Participante extends JsonResource
{
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'cpf' => $this->cpf,
            'name' => $this->name,
            'email' => $this->email,
            'birth' => $this->birth,
            'id_company' => $this->id_company
        ];
    }
}
