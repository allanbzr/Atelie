<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Empresa extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'cnpj' => $this->cnpj,
            'name' => $this->name,
        ];
    }
}
