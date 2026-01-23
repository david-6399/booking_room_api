<?php

namespace App\Livewire\User\Pages;

use App\Models\Room;
use Livewire\Component;
use Livewire\WithPagination;

class Rooms extends Component
{
    use WithPagination;

    public $perPage = 8;

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
        $rooms = Room::latest()->paginate($this->perPage);

        return view('livewire.user.pages.rooms', [
            'rooms' => $rooms,
        ])->layout('livewire.user.layouts.app');
    }
}
