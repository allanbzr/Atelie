<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    use HasFactory;

    protected $fillable = [
        'cpf',
        'name',
        'email',
        'birth',
        'id_company',
    ];


    public function company()
    {
        return $this->hasOne(Empresa::class, 'id_company', 'id');
    }
}
