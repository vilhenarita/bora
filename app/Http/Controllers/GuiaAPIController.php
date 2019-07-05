<?php

namespace App\Http\Controllers;

use App\Guia;
use App\Http\Resources\GuiaCollection;
use App\Http\Resources\GuiaResource;
 
class GuiaAPIController extends Controller
{
    public function index()
    {
        return new GuiaCollection(Guia::paginate());
    }
 
    public function show(Guia $guia)
    {
        return new GuiaResource($guia->load(['passeios', 'chats']));
    }

    public function store(Request $request)
    {
        return new GuiaResource(Guia::create($request->all()));
    }

    public function update(Request $request, Guia $guia)
    {
        $guia->update($request->all());

        return new GuiaResource($guia);
    }

    public function destroy(Request $request, Guia $guia)
    {
        $guia->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
