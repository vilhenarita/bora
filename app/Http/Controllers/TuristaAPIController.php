<?php

namespace App\Http\Controllers;

use App\Turista;
use App\Http\Resources\TuristaCollection;
use App\Http\Resources\TuristaResource;
 
class TuristaAPIController extends Controller
{
    public function index()
    {
        return new TuristaCollection(Turista::paginate());
    }
 
    public function show(Turista $turista)
    {
        return new TuristaResource($turista->load(['passeios', 'contratoPasseios', 'feedbacks', 'chats']));
    }

    public function store(Request $request)
    {
        return new TuristaResource(Turista::create($request->all()));
    }

    public function update(Request $request, Turista $turista)
    {
        $turista->update($request->all());

        return new TuristaResource($turista);
    }

    public function destroy(Request $request, Turista $turista)
    {
        $turista->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
