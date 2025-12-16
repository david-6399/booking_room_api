<?php

namespace App\Http\Resources;

use App\Models\room;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class bookingResource extends JsonResource
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
            'user' => new userResource(User::find($this->user_id)),
            'room' => new roomResource(room::find($this->room_id)),
            'check_in_date' => $this->check_in_date,
            'check_out_date' => $this->check_out_date,
            'status' => $this->status,
            'payment_status' => $this->payment_status,
            'total_amount' => $this->total_amount,
        ];
    }
}
