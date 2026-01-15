<?php

namespace App\Livewire\User\Pages;

use App\Models\Booking;
use App\Models\Room;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;

class Confirmation extends Component
{
    public $booking = null;

    public $room = null;

    public $checkInDate = null;

    public $checkOutDate = null;

    public $totalNights = 0;

    public $guestInfo = null;

    public $totalPrice = 0;

    public function mount()
    {
        $bookingId = request()->query('bookingId');

        $booking = Booking::find($bookingId);

        $room = Room::find($booking->room_id);

        $this->checkInDate = Carbon::parse($booking->check_in_date)->format('F d, Y');
        $this->checkOutDate = Carbon::parse($booking->check_out_date)->format('F d, Y');
        $this->totalNights = Carbon::parse($booking->check_in_date)->diffInDays(Carbon::parse($booking->check_out_date));   
        $this->guestInfo = User::find($booking->user_id);

        if (! $booking) {
            abort(404);
        }

        $this->booking = $booking;
        $this->room = $room;
    }
    
    public function render()
    {        
        
        return view('livewire.user.pages.confirmation')
                ->layout('livewire.user.layouts.app');
    }
}
