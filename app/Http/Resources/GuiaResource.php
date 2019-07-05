<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GuiaResource extends JsonResource
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
            'last_name' => $this->last_name,
            'email' => $this->email,
            'birthday' => $this->birthday,
            'gender' => $this->gender,
            'phone' => $this->phone,
            'rg' => $this->rg,
            'cpf' => $this->cpf,
            'has_english' => $this->has_english,
            'has_cnh' => $this->has_cnh,
            'has_car' => $this->has_car,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'passeios' => PasseioResource::collection($this->whenLoaded('passeios')),
            'chats' => ChatResource::collection($this->whenLoaded('chats'))
        ];
    }
}
