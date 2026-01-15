<?php

namespace App\Livewire\User\Pages;

use App\CreateNewBooking;
use App\Http\Requests\StorebookingRequest;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class RoomsDetails extends Component
{
    public Room $selectedRoom;

    public $bookingData = ['check_in_date'=> ''];   
    
    public $totalPrice = 0;

    public $nightsCount = 0;

    public function mount(Room $id)
    {
        
        $this->selectedRoom = $id;


        if (session()->has('booking_data')) {
            $data = session('booking_data');

            $this->bookingData['room_id']   = $data['room_id'];
            $this->bookingData['check_in_date']  = $data['check_in_date'];
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

        $price = $this->selectedRoom->roomType->price_per_night;

        $this->nightsCount = ($checkOut - $checkIn) / 86400;
        $this->totalPrice = $price * $this->nightsCount;
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
        $data['user_id'] = auth()->id();

        $booking = $service->create($data);

        session()->forget('booking_data');

        session()->flash('success', 'Booking created successfully');
        return redirect()->route('user.confirmation', ['bookingId' => $booking->id , 'slug' => $this->selectedRoom->hostel->slug]);
    }



    public function render()
    {
        return view('livewire.user.pages.rooms-details',[
            'totalPrice' => $this->totalPrice,
        ])->layout('livewire.user.layouts.app');
    }
}
