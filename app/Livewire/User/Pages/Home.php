<?php

namespace App\Livewire\User\Pages;

use Livewire\Component;

class Home extends Component
{

    public $check_in ; 

    public $check_out ;

    public function mount(){
        if(session()->has('booking_data') || session()->has('checksBookingDate')){
            session()->forget('booking_data');
            session()->forget('checksBookingDate');
        }
    }

    
    public function searchRoom(){
        session([
            'checksBookingDate'=> [
                'check_in_date' => $this->check_in ,
                'check_out_date' => $this->check_out,
            ]
        ]);
        return redirect()->route('user.rooms');
    }


    public function render()
    {
        return view('livewire.user.pages.home')
            ->layout('livewire.user.layouts.app');
    }
}
