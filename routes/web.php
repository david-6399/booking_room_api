<?php

use App\Livewire\Admin\Pages\Bookings;
use App\Livewire\Admin\Pages\Dashboard;
use App\Livewire\Admin\Pages\Profile;
use App\Livewire\Admin\Pages\Rooms;
use App\Livewire\Admin\Pages\Setting;
use App\Livewire\Super\Pages\Bookings as PagesBookings;
use App\Livewire\Super\Pages\Hostels;
use App\Livewire\Super\Pages\Main;
use App\Livewire\Super\Pages\Users;
use App\Livewire\User\Pages\Confirmation;
use App\Livewire\User\Pages\Dashboard\Booking as DashboardBooking;
use App\Livewire\User\Pages\Dashboard\Dashboard as PagesDashboard;
use App\Livewire\User\Pages\Dashboard\Profil;
use App\Livewire\User\Pages\Dashboard\Room;
use App\Livewire\User\Pages\Home;
use App\Livewire\User\Pages\Rooms as PagesRooms;
use App\Livewire\User\Pages\RoomsDetails;
use App\Models\Booking;
use App\Models\Hostel;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

require __DIR__ . '/auth.php';


// Route::get('/', function () {
//     return [auth()->check() ? auth()->user()->name : 'Guest'];
// });




route::get('/', \App\Livewire\User\Pages\Home::class)->name('user.home');     // no multi tenant

route::get('/rooms', PagesRooms::class)->name('user.rooms'); // no multi tenant


// guest dashboard routes
route::prefix('guest/{$id}')->group(function(){
    route::get('/', PagesDashboard::class)->name('user.dashboard.home');
    route::get('/booking', DashboardBooking::class)->name('user.dashboard.booking');
    route::get('/room', Room::class)->name('user.dashboard.room');
    route::get('/profil', Profil::class)->name('user.dashboard.profil');

});


// super admin dashboard routes
route::prefix('super')->middleware('auth')->group(function(){
    route::get('/', Main::class)->name('super.dashboard.home');
    route::get('/booking', PagesBookings::class)->name('super.dashboard.bookings');
    route::get('/hostels', Hostels::class)->name('super.dashboard.hostels');
    route::get('/users', Users::class)->name('super.dashboard.users');
    route::get('/room', function(){return 'super admin side not ready ';})->name('super.dashboard.rooms');
    route::get('/profil', function(){return 'super admin side not ready ';})->name('super.dashboard.profile');
    route::get('/setting', function(){return 'super admin side not ready ';})->name('super.dashboard.setting');

});



route::get('/hostels', function(){
    return view('livewire.user.pages.hostel');
});

route::get('/comp', function(){
    return view('livewire.user.layouts.components');
});



route::middleware(['tenant','web'])->prefix('{slug}')->group(function () {
    
    route::get('/confirmation', Confirmation::class)->name('tenant.confirmation'); // may go with multi tenant
        
    route::get('/room/{id}', RoomsDetails::class)->name('tenant.roomDetails');

    route::get('/', function () {
        return view('livewire.user.pages.hostel');
    });

    //admin dashboard routes
    route::prefix('admin/{id}')->middleware(['hostelOwner'])->group(function () {

        route::get('/', Dashboard::class)->name('admin.dashboard.home');
        route::get('/setting', Setting::class)->name('admin.dashboard.setting');
        route::get('/profile', Profile::class)->name('admin.dashboard.profile');
        route::get('/room', Rooms::class)->name('admin.dashboard.room');
        route::get('/booking', Bookings::class)->name('admin.dashboard.booking');

    });

    route::prefix('user')->group(function () {

        route::get('/dashboard', Dashboard::class)->name('user.dashboard');
        route::get('/mybooking', Bookings::class)->name('user.booking');
    });
});





