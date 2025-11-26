<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TicketResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'client' =>new ClientResource($this->whenLoaded('client')),
            'theme' => $this->theme,
            'text' => $this->text,
            'status' => $this->status,
            'images' => AttachmentResource::collection($this->whenLoaded('images')),
        ];
    }
}
