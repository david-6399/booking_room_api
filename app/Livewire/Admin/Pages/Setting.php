<?php

namespace App\Livewire\Admin\Pages;

use Livewire\Component;

class Setting extends Component
{
    public function render()
    {
        return view('livewire.admin.pages.setting')
            ->layout('livewire.admin.layouts.app',[
                'header' => 'My Settings'
            ]);
    }
}
