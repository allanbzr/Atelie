<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participante;
use App\Http\Resources\Participante as ParticipanteResource;

class participanteController extends Controller
{

    public function index()
    {
        $participante = Participante::paginate(15);
        return ParticipanteResource::collection($participante);
    }

    public function show($id)
    {
        $participante = Participante::findOrFail($id);
        return new ParticipanteResource($participante);
    }

    public function store(Request $request)
    {
        $participante = new Participante;
        $participante->cpf = $request->input('cpf');
        $participante->name = $request->input('name');
        $participante->email = $request->input('email');
        $participante->birth = $request->input('birth');
        $participante->id_company = $request->input('id_company');

        if ($participante->save()) {
            return new ParticipanteResource($participante);
        }
    }

    public function update(Request $request)
    {
        $participante = Participante::findOrFail($request->id);
        $participante->cpf = $request->input('cpf');
        $participante->name = $request->input('name');
        $participante->email = $request->input('email');
        $participante->birth = $request->input('birth');
        $participante->id_company = $request->input('id_company');

        if ($participante->save()) {
            return new ParticipanteResource($participante);
        }
    }

    public function destroy($id)
    {
        $participante = Participante::findOrFail($id);
        if ($participante->delete()) {
            return new ParticipanteResource($participante);
        }
    }
}
