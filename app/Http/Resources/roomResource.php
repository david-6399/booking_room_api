<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class roomResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'room_number' => $this->room_number,
            'capacity' => $this->capacity,
            'status' => $this->status,
            'room_type' => new roomTypeResource($this->roomType),
        ];
    }
}
