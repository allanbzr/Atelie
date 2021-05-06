<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Empresa;

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
            'company_name' => Empresa::find($this->id_company)->name
        ];
    }
}
