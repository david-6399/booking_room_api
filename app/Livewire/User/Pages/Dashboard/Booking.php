<?php

namespace App\Livewire\User\Pages\Dashboard;

use Livewire\Component;

class Booking extends Component
{
    public function render()
    {
        return view('livewire.user.pages.dashboard.booking')
                ->layout('livewire.user.layouts.dashboard');
    }
}
