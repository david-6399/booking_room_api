<?php

namespace App\Livewire\Super\Pages;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination ;

    public $user ;
    public $search = '' ;
    public $perUserStatus = '' ;
    public $perHostelStatus = '' ;
    public $perPage = 10 ;
    public $perEmailStatus = '' ;  


    public function showHostelOwner(){
        $this->perUserStatus = 'admin';
    }


    public function render()
    {
        $user = auth()->user();
        $query = User::query();

        if (!empty($this->search)) {
            $query->where(function ($q) {
                $q->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('email', 'like', '%' . $this->search . '%')
                    ->orWhere('phone', 'like', '%' . $this->search . '%');
            });
        }

        if(!empty($this->perEmailStatus)){
            if($this->perEmailStatus === 'true'){
                $query->whereNotNull('email_verified_at');
            }else{
                $query->whereNull('email_verified_at');
            }
        }

        if(!empty($this->perHostelStatus)){
            $query->whereHas('hostel', function ($q){
                $q->where('status', $this->perHostelStatus);
            });
        }

        if(!empty($this->perUserStatus)){
            if($this->perUserStatus == 'pending'){
                $query->whereHas('hostel')->whereHas('roles', function ($q) {
                    $q->where('name', 'guest');
                });
            }else{
                $query->whereHas('roles', function ($q){
                    $q->where('name',$this->perUserStatus);
                });
            }
        }



        $users = $query->paginate($this->perPage);
        return view('livewire.super.pages.users',[
            'users' => $users
        ])
                ->layout('livewire.super.layouts.app',[
                    'header' => 'Manage Users'
                ]);
    }
}
