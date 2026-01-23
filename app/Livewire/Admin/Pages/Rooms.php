<?php

namespace App\Livewire\Admin\Pages;

use App\Enums\roomStatus;
use App\Http\Requests\StoreroomRequest;
use App\Http\Requests\UpdateroomRequest;
use App\Services\Room\CreateRoom;
use App\Services\Room\UpdateRoom;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Rooms extends Component
{
    use WithPagination, WithoutUrlPagination, WithFileUploads; 

    public $room = [];
    
    public $updateRoom = [];

    public $images = [];

    public $updateImages = [];

    public $perStatus = null; 

    public $perType = null;

    public $perPage = 6 ;

    public $searchRoom = '' ;

    public ?int $roomId = null ;



    public function mount()
    {
        abort_unless(auth()->user()->hasRole('admin'), 403);

        $this->roomId ? $this->updateRoom = \App\Models\Room::findOrFail($this->roomId)->toArray() : null ;
    }



    public function rules(){
        $request = $this->roomId ? new UpdateroomRequest() : new StoreroomRequest();

        return collect($request->rules())
            ->mapWithKeys(fn($rule, $key) => [$this->roomId ? "updateRoom.$key" :"room.$key" => $rule])
            ->toArray();
    }

    public function messages(){
        $request = $this->roomId ? new UpdateroomRequest() : new StoreroomRequest();

        return collect($request->messages())
            ->mapWithKeys(fn($rule, $key) => [$this->roomId ? "updateRoom.$key" : "room.$key"  => $rule])
            ->toArray();
    }

    

    public function createRoom(){
        $validated = $this->validate();

        $service = new CreateRoom();    
        $result = $service->execute($this->room, $this->images);

        $this->dispatch('closeCreateRoomModal');
        $this->images = [] ;
        $this->room = [] ;
        
    }

    public function removeImage($index){
        unset($this->images[$index]);
        $this->images = array_values($this->images);
    }


    public function openEditRoomPopup($id){
        $this->roomId = $id;
        $this->updateRoom = \App\Models\Room::findOrFail($this->roomId)->toArray();
        $this->dispatch('openEditRoomModal');
    }

    public function editRoom(){
        $validated = $this->validate();

        $service = new UpdateRoom();
        $result = $service->execute($validated['updateRoom'], $this->roomId, $this->updateImages);   
        $this->dispatch('closeEditRoomModal') ; 
        $this->updateRoom = [] ;
        $this->updateImages = [] ;
    }

    public function render()
    {
        $query = \App\Models\Room::query();

        if (!empty($this->perStatus)) {
            $query->where('status', roomStatus::from($this->perStatus));
        }

        if (!empty($this->perType)) {
            $query->where('room_type_id', $this->perType);
        }

        if (!empty($this->searchRoom)) {
            $query->where(function ($q) {
                $q->where('room_number', 'like', '%' . $this->searchRoom . '%')
                    ->orWhere('capacity', 'like', '%' . $this->searchRoom . '%');
            });
        }

        $rooms = $query->paginate($this->perPage);


        // $rooms = \App\Models\Room::paginate(6);
        $roomTypes = \App\Models\Room_type::all();
        return view('livewire.admin.pages.rooms',[
            'rooms' => $rooms,
            'roomTypes' => $roomTypes,
        ])
                ->layout('livewire.admin.layouts.app',[
                    'header' => 'Room Management '
                ]);
    }
}
