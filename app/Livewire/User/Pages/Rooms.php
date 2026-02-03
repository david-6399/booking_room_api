<?php

namespace App\Livewire\User\Pages;

use App\Models\Room;
use Livewire\Component;
use Livewire\WithPagination;

class Rooms extends Component
{
    use WithPagination;

    public $perPage = 8;

    public $minPrice = 0;

    public $maxPrice = 0;

    public $check_in = '';

    public $check_out = '';

    public function openRoom(int $id)
    {
        $room = Room::findOrFail($id);

        return redirect()->route('tenant.roomDetails', [
            'slug' => $room->hostel->slug,
            'id'   => $room->id,
        ]);
    }

    public function render()
    {
        $query = Room::query();

        if (!empty($this->minPrice)) {
            $query->where('price_per_night', '>', $this->minPrice);
        }

        if (!empty($this->maxPrice)) {
            $query->where('price_per_night', '<', $this->maxPrice);
        }

        $rooms = $query->latest()->paginate($this->perPage);

        return view('livewire.user.pages.rooms', [
            'rooms' => $rooms,
        ])->layout('livewire.user.layouts.app');
    }
}
