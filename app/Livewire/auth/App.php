<?php

namespace App\Livewire\Admin\Pages;

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
