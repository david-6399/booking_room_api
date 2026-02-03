<?php

namespace App\Livewire\Super\Pages;

use Livewire\Component;

class Main extends Component
{
    public function render()
    {
        return view('livewire.super.pages.main')
                    ->layout('livewire.super.layouts.app',[
                        'header' => 'Dashboard'
                    ]);
    }
}
