<?php

namespace App\Livewire\User\Pages;

use App\CreateNewBooking;
use App\Http\Requests\StorebookingRequest;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Livewire\WithFileUploads;

class RoomsDetails extends Component
{
    use WithFileUploads;
    public Room $selectedRoom;

    public $bookingData = ['check_in_date'=> ''];   
    
    public $totalPrice = 0;

    public $nightsCount = 0;

    public $price = 0;

    public $getRoomImages ;

    public function mount(Room $id)
    {
        $this->selectedRoom = $id;

        $this->getRoomImages = $this->selectedRoom->getMedia('roomImages');

        if (session()->has('booking_data')) {
            $data = session('booking_data');

            $this->bookingData['room_id']   = $data['room_id'];
            $this->bookingData['check_in_date']  = $data['check_in_date'];
            $this->bookingData['check_out_date'] = $data['check_out_date'];
            $this->nightsCount = $data['nights_count'];
            $this->totalPrice = $data['total_amount'];
            $this->price = $data['price_per_night'];
        }

        if(session()->has('checksBookingDate')){
            $data = session('checksBookingDate');
            $this->bookingData['check_in_date'] = $data['check_in_date'];
            $this->bookingData['check_out_date'] = $data['check_out_date'];
        }
    }

    public function updatedBookingData(){   
        if (
            empty($this->bookingData['check_in_date']) ||
            empty($this->bookingData['check_out_date'])
        ) {
            $this->nightsCount = 0;
            $this->totalPrice = 0;
            return;
        }

        $checkIn  = strtotime($this->bookingData['check_in_date']);
        $checkOut = strtotime($this->bookingData['check_out_date']);

        if ($checkOut <= $checkIn) {
            $this->nightsCount = 0;
            $this->totalPrice = 0;
            return;
        }

        $this->price = $this->selectedRoom->price_per_night;

        $this->nightsCount = ($checkOut - $checkIn) / 86400;
        $this->totalPrice = $this->price * $this->nightsCount;
    }

    
    protected function rules()
    {
        return [
            'bookingData.check_in_date' => 'required|date',  // add |after_or_equal:today    
            'bookingData.check_out_date' => 'required|date|after:check_in_date',
        ];
    }


    public function bookNow(){
        
        
        $this->validate();
        session([
            'booking_data' => [
                'room_id' => $this->selectedRoom->id ,
                'check_in_date' => $this->bookingData['check_in_date'],
                'check_out_date' => $this->bookingData['check_out_date'],
                'total_amount' => $this->totalPrice,
                'nights_count' => $this->nightsCount,
                'price_per_night' => $this->selectedRoom->price_per_night,
                ]
        ]);
            
       if(auth()->check()){
            $this->completeBooking();
            return;
       }
        
    }

    protected $listeners = ['resume-booking' => 'completeBooking'];

    public function completeBooking()
    {

        if (! session()->has('booking_data')) {
            return;
        }

        $service = app(CreateNewBooking::class);

        $data = session('booking_data');
        unset($data['nights_count'], $data['price_per_night'], $data['total_amount']);
        $data['user_id'] = auth()->id();
        
            
        $booking = $service->create($data);

        session()->forget('booking_data');

        session()->flash('success', 'Booking created successfully');
        return redirect()->route('tenant.confirmation', ['bookingId' => $booking->id , 'slug' => $this->selectedRoom->hostel->slug]);
    }



    public function render()
    {
        return view('livewire.user.pages.rooms-details',[
            'totalPrice' => $this->totalPrice,
        ])->layout('livewire.user.layouts.app');
    }
}
