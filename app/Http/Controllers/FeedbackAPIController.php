<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\Http\Resources\FeedbackCollection;
use App\Http\Resources\FeedbackResource;
 
class FeedbackAPIController extends Controller
{
    public function index()
    {
        return new FeedbackCollection(Feedback::paginate());
    }
 
    public function show(Feedback $feedback)
    {
        return new FeedbackResource($feedback->load(['turista', 'passeio']));
    }

    public function store(Request $request)
    {
        return new FeedbackResource(Feedback::create($request->all()));
    }

    public function update(Request $request, Feedback $feedback)
    {
        $feedback->update($request->all());

        return new FeedbackResource($feedback);
    }

    public function destroy(Request $request, Feedback $feedback)
    {
        $feedback->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
