<?php

use App\Livewire\Admin\Pages\Bookings;
use App\Livewire\Admin\Pages\Dashboard;
use App\Livewire\Admin\Pages\Profile;
use App\Livewire\Admin\Pages\Rooms;
use App\Livewire\Admin\Pages\Setting;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});


route::get('/dashboard', Dashboard::class);
route::get('/setting', Setting::class);
route::get('/profile', Profile::class);
route::get('/booking', Bookings::class);
route::get('/room', Rooms::class);    

