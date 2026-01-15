<?php

namespace App\Livewire\User\Pages\Dashboard;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.user.pages.dashboard.dashboard')
                ->layout('livewire.user.layouts.dashboard') ;
    }
}
