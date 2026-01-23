<?php

namespace App\Livewire\Admin\Pages;

use App\Models\Hostel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component 
{
    use WithFileUploads;

    public $adminInfo ;

    public $hostel ;

    public $currentPassword ;

    public $newPassword ;

    public $newPassword_confirmation ;

    public $hostelCoverImage = '';
    
    public $coverImage ;

    public function mount(){
        $this->adminInfo = auth()->user()->toArray();
        $this->hostel = Hostel::first(); // later: owner hostel
    }

    public function updatePassword(){
        $this->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required | confirmed'
        ]);

        $auth = Auth::user();
        
        if(!Hash::check($this->currentPassword, $auth->password)){
            // send notification error
            return ;
        };

        $auth->update([
            'password'=> Hash::make($this->newPassword)
        ]);
     
        $this->reset(['currentPassword', 'newPassword', 'newPassword_confirmation']);
    
    }

    public function saveCoverImage(){
        
        if($this->coverImage){
            $this->hostel->clearMediaCollection('hostelCover');
            $this->hostel
            ->addMedia($this->coverImage->getRealPath())
            ->usingFileName($this->coverImage->getClientOriginalName())
            ->toMediaCollection('hostelCover');
            $this->reset('coverImage');
        }else{
            return ;
        }

    }


    public function render()
    {
        return view('livewire.admin.pages.profile', [
            'adminInfo' => auth()->user(),
            'cover' => $this->hostel?->getFirstMediaUrl('hostelCover'),
        ])->layout('livewire.admin.layouts.app', [
            'header' => 'My Profile',
        ]);
    }
}
