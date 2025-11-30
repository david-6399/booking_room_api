<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

route::prefix('v1')->group(function () {
    route::get('room', function(){
        return 'room one';
    }) ;
    
    require __DIR__ . '/auth.php';
});
