<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\userResource;
use App\Models\Hostel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class AuthenticatedSessionController extends Controller
{
    /**
     * Handle an incoming authentication request.
     */
    public function create()
    {
        // dd('test');
        return view('livewire/auth/pages/login', [
            'canResetPassword' => Route::has('password.request'),
            'status' => session('status'),
        ]);
    }

    public function storeApi(LoginRequest $request) 
    {
        $request->authenticate();

        // $request->session()->regenerate();

        $user = $request->user();
        $token = $user->createToken('api_token')->plainTextToken;

        return [    
            'user' => new userResource($user),
            'token' => $token,
        ];
    }



    public function store(LoginRequest $request) : RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();
        

        // $slug = auth()->user()->hostel->slug;

        return redirect()->intended(route('user.home'));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request) : RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('user.rooms');
    }
}
