<?php

namespace App\Livewire\Super\Pages;

use App\Models\Booking;
use Livewire\Component;
use Livewire\WithPagination;

class Bookings extends Component
{
    use WithPagination ;
    public function render()
    {
        $bookings = Booking::paginate(6);
        return view('livewire.super.pages.bookings',[
            'bookings' => $bookings
        ])->layout('livewire.super.layouts.app',[
            'header' => 'Manage Booking'
        ]);
    }
}
