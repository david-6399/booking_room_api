<?php

namespace App\Livewire\Admin\Pages;

use App\Enums\bookingStatus;
use App\Models\Booking;
use App\Models\Room;
use Livewire\Component;
use Livewire\WithPagination;

class Bookings extends Component
{
    use WithPagination ;

    public $bookingInfo = [];

    public $bookingStatus = '';

    public $nightCount = 0 ;

    public $roomPrice = 0 ;

    public $bookingTotalAmount = 0 ;

    public $bookingTaxes = 10 ;

    public $perPage = 6 ;

    public $perStatus = '' ;

    public $perDateStart = "" ;

    public $perDateEnd = "";



    public function viewBooking($id){   
        
        $this->bookingInfo = booking::find($id);

        $room = Room::find($this->bookingInfo['room_id']);
        $this->roomPrice = $room->price_per_night;        
        $this->nightCount = (strtotime($this->bookingInfo['check_out_date']) - strtotime($this->bookingInfo['check_in_date'])) / 86400;
        $this->bookingTotalAmount = $this->roomPrice * $this->nightCount;


        $this->dispatch('openBookingDetailsModal');
    }

    public function resetAfterClosingModal(){
        $this->bookingInfo = [];
        $this->bookingStatus = '';
    }

    public function changeStatus($id){
        $this->bookingInfo = booking::find($id);
        $this->bookingStatus = $this->bookingInfo['status'];
        $this->dispatch('openChangeStatusModal');
    }

    public function updateStatus(){
        booking::find($this->bookingInfo['id'])->update([
            'status' => $this->bookingStatus
        ]);
    }

    public function printBookingDetails(){
        dd('print from here !');
    }


    public function render()
    {
        $query = Booking::query();

        if(!empty($this->perStatus)){
            $query->where('status','like', bookingStatus::from($this->perStatus));
        }

        if(!empty($this->perDateStart)){
            $query->where('check_in_date','>',$this->perDateStart);
        }

        if(!empty($this->perDateEnd)){
            $query->where('check_out_date','<',$this->perDateEnd);
        }

        $bookings = $query->paginate($this->perPage);

        $bookingNb = booking::count();

        $confirmedNb = booking::where('status', bookingStatus::CONFIRMED->value)->count();

        $cancelledNb = booking::where('status', bookingStatus::CANCELED->value)->count() ;

        $pendingNb = booking::where('status' , bookingStatus::PENDING->value)->count();


        return view('livewire.admin.pages.Bookings',[
            'bookings' => $bookings,
            'bookingNb' => $bookingNb,  
            'confirmedNb' => $confirmedNb,
            'cancelledNb' => $cancelledNb,
            'pendingNb' => $pendingNb,
        ])
            ->layout('livewire.admin.layouts.app',[
                'header' => 'Booking Management'
            ]);
    }
}
