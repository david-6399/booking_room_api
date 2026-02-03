<?php

namespace App\Livewire\Super\Pages;

use App\Models\Booking;
use App\Models\Hostel;
use Livewire\Component;
use Livewire\WithPagination;

class Hostels extends Component
{
    use WithPagination;


    public function addNewHostel(){
        $this->dispatch('openCreateModal');
    }

    public function render()
    {
        $hostels = hostel::paginate(10);
        return view('livewire.super.pages.hostels',[
            'hostels' => $hostels
        ])->layout('livewire.super.layouts.app',[
            'header' => 'Manage Hostel'
        ]);
    }
}
