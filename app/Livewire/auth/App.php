<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class App extends Component
{
    public function render()
    {

        return view('livewire.auth.layouts.app',[
            'current' => 'test',
        ]);
            
    }
}
