<?php

namespace App\Livewire\User\Pages;

use Livewire\Component;

class Home extends Component
{
    
    public function render()
    {
        return view('livewire.user.pages.home')
            ->layout('livewire.user.layouts.app');
    }
}
