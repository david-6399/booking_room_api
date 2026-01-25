<?php

namespace App\Livewire\Admin\Pages;

use App\Models\Hostel;
use App\Services\Basics\UploadImages;
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

    public function saveCoverImage(UploadImages $uploader){

        $this->validate([
            'coverImage' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if($this->coverImage){
            $uploader->upload($this->coverImage, $this->hostel,'hostelCover', true);
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
