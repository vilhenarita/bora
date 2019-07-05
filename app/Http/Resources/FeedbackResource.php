<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FeedbackResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'stars' => $this->stars,
            'title' => $this->title,
            'description' => $this->description,
            'turista_id' => $this->turista_id,
            'passeio_id' => $this->passeio_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'turista' => new TuristaResource($this->whenLoaded('turista')),
            'passeio' => new PasseioResource($this->whenLoaded('passeio'))
        ];
    }
}
