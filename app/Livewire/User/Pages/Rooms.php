<?php

namespace App\Livewire\User\Pages;

use App\Models\Room;
use Livewire\Component;
use Livewire\WithPagination;

class Rooms extends Component
{
    use WithPagination;

    public $perPage = 8;

    

    public function openRoom(Room $roomId)
    {
        $slug = $roomId->hostel->slug;
        return redirect()->route('tenant.roomDetails', ['slug' => $slug, 'id' => $roomId->id]);
    }
    public function render()
    {
        $rooms = Room::withoutGlobalScopes()->paginate($this->perPage);
        return view('livewire.user.pages.rooms',[
            'rooms' => $rooms,
        ])
                ->layout('livewire.user.layouts.app');
    }
}
