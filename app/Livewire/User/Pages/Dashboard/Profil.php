<?php

namespace App\Livewire\User\Pages\Dashboard;

use Livewire\Component;

class Profil extends Component
{
    public function render()
    {
        return view('livewire.user.pages.dashboard.profil')
                    ->layout('livewire.user.layouts.dashboard');
    }
}
