<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PasseioResource extends JsonResource
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
            'img' => $this->img,
            'name' => $this->name,
            'description' => $this->description,
            'adress' => $this->adress,
            'status' => $this->status,
            'guia_id' => $this->guia_id,
            'turista_id' => $this->turista_id,
            'average_rating' => $this->average_rating,
            'num_feedback' => $this->num_feedback,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'contrato_passeios' => ContratoPasseioResource::collection($this->whenLoaded('contrato_passeios')),
            'feedbacks' => FeedbackResource::collection($this->whenLoaded('feedbacks')),
            'guia' => new GuiaResource($this->whenLoaded('guia')),
            'turista' => new TuristaResource($this->whenLoaded('turista'))
        ];
    }
}
