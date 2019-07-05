<?php

namespace App\Http\Controllers;

use App\Chat;
use App\Http\Resources\ChatCollection;
use App\Http\Resources\ChatResource;
 
class ChatAPIController extends Controller
{
    public function index()
    {
        return new ChatCollection(Chat::paginate());
    }
 
    public function show(Chat $chat)
    {
        return new ChatResource($chat->load(['guia', 'turista']));
    }

    public function store(Request $request)
    {
        return new ChatResource(Chat::create($request->all()));
    }

    public function update(Request $request, Chat $chat)
    {
        $chat->update($request->all());

        return new ChatResource($chat);
    }

    public function destroy(Request $request, Chat $chat)
    {
        $chat->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
