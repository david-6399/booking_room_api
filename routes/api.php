<?php

use App\Http\Controllers\HostelController;
use App\Http\Controllers\v1\BookingController;
use App\Http\Controllers\v1\RoomController;
use App\Http\Controllers\v1\RoomTypeController;
use App\Http\Controllers\v1\userController;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// API Version1 Group
route::prefix('v1')->group(function () {

    // Auth Group
    route::middleware('auth:sanctum')->group(function () {

        // Admin Route
        route::middleware('role:super_admin|admin')->group(function () {
            route::apiResource('user', userController::class);
            route::apiResource('room-type', RoomTypeController::class);
            route::apiResource('room', RoomController::class);
            route::apiResource('booking', BookingController::class)->only(['index', 'store']);
            // change booking status
            route::patch('booking/{id}/confirm', [BookingController::class, 'confirm']);
            route::patch('booking/{id}/checkin', [BookingController::class, 'checkIn']);
            route::patch('booking/{id}/checkout', [BookingController::class, 'checkOut']);

            route::apiResource('hostel', HostelController::class);
        });

        // Guest Route
        route::middleware('role:guest')->group(function () {});
    });

    route::get('test', function () {
        return Room::with('hostel')->get();
    });

    require __DIR__ . '/auth.php';
});
