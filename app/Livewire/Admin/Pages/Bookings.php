<?php

namespace App\Livewire\Admin\Pages;

use Livewire\Component;

class Bookings extends Component
{
    public function render()
    {
        
        return view('livewire.admin.pages.Bookings')
            ->layout('livewire.admin.layouts.app',[
                'header' => 'Booking Management'
            ]);
    }
}
