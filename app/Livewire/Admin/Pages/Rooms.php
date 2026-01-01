<?php

namespace App\Livewire\Admin\Pages;

use Livewire\Component;

class Rooms extends Component
{
    public function render()
    {
        return view('livewire.admin.pages.rooms')
                ->layout('livewire.admin.layouts.app',[
                    'header' => 'Room Management '
                ]);
    }
}
