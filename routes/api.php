<?php

use App\Http\Controllers\v1\RoomController;
use App\Http\Controllers\v1\RoomTypeController;
use App\Http\Controllers\v1\userController;
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
        route::middleware('role:admin')->group(function () {
            route::apiResource('user', userController::class);
            route::apiResource('room-type', RoomTypeController::class);
            route::apiResource('room', RoomController::class);
        });
        
        // Guest Route
        route::middleware('role:guest')->group(function () {
    
        });
        
        
    });

    require __DIR__ . '/auth.php';
});
