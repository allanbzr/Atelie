<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Http\Resources\Empresa as EmpresaResource;

class empresaController extends Controller
{
    public function index()
    {
        $empresa = Empresa::all();
        return EmpresaResource::collection($empresa);
    }

    public function show($id)
    {
        $empresa = Empresa::findOrFail($id);
        return new EmpresaResource($empresa);
    }

    public function store(Request $request)
    {
        $empresa = new Empresa;
        $empresa->cnpj = $request->input('cnpj');
        $empresa->name = $request->input('name');

        if ($empresa->save()) {
            return new EmpresaResource($empresa);
        }
    }

    public function update(Request $request)
    {
        $empresa = Empresa::findOrFail($request->id);
        $empresa->cnpj = $request->input('cnpj');
        $empresa->name = $request->input('name');

        if ($empresa->save()) {
            return new EmpresaResource($empresa);
        }
    }

    public function destroy($id)
    {
        $empresa = Empresa::findOrFail($id);
        if ($empresa->delete()) {
            return new EmpresaResource($empresa);
        }
    }
}
