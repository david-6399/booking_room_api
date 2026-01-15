<?php

namespace App\Livewire\User\Pages\Dashboard;

use Livewire\Component;

class Room extends Component
{
    public function render()
    {
        return view('livewire.user.pages.dashboard.room')
                ->layout('livewire.user.layouts.dashboard');
    }
}
