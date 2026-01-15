<?php

namespace App\Livewire\Auth\Partials;

use Livewire\Component;

class LoginModal extends Component
{

    public $email;
    public $password;

    // protected $listeners = ['login-success' => '$refresh'];



    public function login()
    {

        if (! auth()->attempt($this->only(['email', 'password']))) {
            $this->addError('email', 'Invalid credentials');
            return;
        }

        session()->regenerateToken();

        // $this->dispatch('login-success');
        

        return redirect(request()->header('Referer'));

    }



    public function render()
    {
        return view('livewire.auth.partials.login-modal');
    }
}
