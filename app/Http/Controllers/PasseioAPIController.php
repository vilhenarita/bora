<?php

namespace App\Http\Controllers;

use App\Passeio;
use App\Http\Resources\PasseioCollection;
use App\Http\Resources\PasseioResource;

use Illuminate\Http\Request;
class PasseioAPIController extends Controller
{
    public function index()
    {
        return new PasseioCollection(Passeio::paginate());
    }
 
    public function show(Passeio $passeio)
    {
        return new PasseioResource($passeio->load(['contratoPasseios', 'feedbacks', 'guia', 'turista']));
    }

    public function store(Request $request)
    {
        return new PasseioResource(Passeio::create($request->all()));
    }

    public function update(Request $request, Passeio $passeio)
    {
        $passeio->update($request->all());

        return new PasseioResource($passeio);
    }

    public function destroy(Passeio $passeio)
    {
        $passeio->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
