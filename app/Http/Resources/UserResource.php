<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'last_name' => $this->last_name,
            'email' => $this->email,
            'birthday' => $this->birthday,
            'gender' => $this->gender,
            'phone' => $this->phone,
            'rg' => $this->rg,
            'cpf' => $this->cpf,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'passeios' => PasseioResource::collection($this->whenLoaded('passeios')),
            'contrato_passeios' => ContratoPasseioResource::collection($this->whenLoaded('contrato_passeios')),
            'feedbacks' => FeedbackResource::collection($this->whenLoaded('feedbacks')),
            'chats' => ChatResource::collection($this->whenLoaded('chats'))
        ];
    }
}
