<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ChatResource extends JsonResource
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
            'message' => $this->message,
            'date' => $this->date,
            'guia_id' => $this->guia_id,
            'turista_id' => $this->turista_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'guia' => new GuiaResource($this->whenLoaded('guia')),
            'turista' => new TuristaResource($this->whenLoaded('turista'))
        ];
    }
}
