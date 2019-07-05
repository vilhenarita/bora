<?php

namespace App\Http\Controllers;

use App\Contrato_passeio;
use App\Http\Resources\Contrato_passeioCollection;
use App\Http\Resources\Contrato_passeioResource;
 
class Contrato_passeioAPIController extends Controller
{
    public function index()
    {
        return new Contrato_passeioCollection(Contrato_passeio::paginate());
    }
 
    public function show(Contrato_passeio $contratoPasseio)
    {
        return new Contrato_passeioResource($contratoPasseio->load(['turista', 'passeio']));
    }

    public function store(Request $request)
    {
        return new Contrato_passeioResource(Contrato_passeio::create($request->all()));
    }

    public function update(Request $request, Contrato_passeio $contratoPasseio)
    {
        $contratoPasseio->update($request->all());

        return new Contrato_passeioResource($contratoPasseio);
    }

    public function destroy(Request $request, Contrato_passeio $contratoPasseio)
    {
        $contratoPasseio->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
