<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vaga;
use App\Http\Resources\VagaResource;
use App\Http\Requests\StoreUpdateVagaRequest;


class VagaController extends Controller
{
    public function index()
    {
        $vaga = Vaga::all();

        return VagaResource::collection($vaga);
    }

    public function store(StoreUpdateVagaRequest $request)
    {
        $data = $request->all();

        $vaga = Vaga::create($data);

        return new VagaResource($vaga);
    }

    public function show(string $id)
    {
        $vaga = Vaga::findOrFail($id);

        return new VagaResource($vaga);
    }

    public function update(StoreUpdateVagaRequest $request, string $id)
    {
        $vaga = Vaga::findOrFail($id);

        $vaga->update($request->all());

        return new VagaResource($vaga);
    }

    public function destroy(string $id)
    {
        $vaga = Vaga::findOrFail($id);

        $vaga->delete();

        return response()->json([], 204);
    }
}
