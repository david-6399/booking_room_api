<?php

namespace App\Http\Controllers\Auth;

use App\Enums\hostelStatus;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Hostel;
use App\Models\Room;
use App\Models\User;
use App\Notifications\hostelAdminRequest;
use App\Notifications\HostelRequestPendingEmail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rules;
use Spatie\Permission\Models\Role;

class RegisteredUserController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function create()
    {
        return view('livewire/auth/pages/register', [
            'canResetPassword' => Route::has('password.request'),
            'status' => session('status'),
        ]);
    }

    public function storeApi(Request $request): Response
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'phone' => ['nullable', 'string'],
            'admin_code' => ['nullable', 'string'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->string('password')),
        ]);

        if ($request->filled('admin_code') && $request->admin_code === 'admin123') {
            $user->assignRole('admin');
        } else {    
            $user->assignRole('guest');
        }

        event(new Registered($user));

        // Auth::login($user);

        return response()->noContent();
    }


    public function store(Request $request)
    {
        $user = null;
        $hostel = null;

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],    
            
            'admin_code' => ['nullable', 'string'],

            'has_details' => ['sometimes', 'boolean'],
            'hostel.name' => 'required_if:has_details,1|string|max:16',
            'hostel.slug' => 'required_if:has_details,1|string|max:10|unique:hostels,slug',
            'hostel.location' => 'required_if:has_details,1|string',
            'hostel.phone' => ['required_if:has_details,1', 'string', 'max:20', 'regex:/^(\+213|0)(5|6|7)[0-9]{8}$/'],
        ], [
            'name.required' => 'The name field is required.',
            'email.required' => 'Please provide an email address.',
            'email.unique' => 'This email is already registered.',
            'password.required' => 'A password is required.',
            'password.confirmed' => 'The passwords do not match.',
            'name.required' => 'The name field is required.',
            'email.required' => 'Please provide an email address.',
            'email.unique' => 'This email is already registered.',
            'password.required' => 'A password is required.',
            'password.confirmed' => 'The passwords do not match.',
            'hostel.name.required_if' => 'Hostel name is required when providing hostel details.',
            'hostel.slug.required_if' => 'Hostel slug is required when providing hostel details.',
            'hostel.slug.unique' => 'This hostel slug already exists.',
            'hostel.location.required_if' => 'Hostel location is required when providing hostel details.',
            'hostel.phone.required_if' => 'Hostel phone is required when providing hostel details.',
            'hostel.phone.regex' => 'Please enter a valid Algerian phone number.',
        ]);

        DB::transaction(function() use ($validated, &$user, &$hostel){

            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
            ]);
            
            $user->assignRole('guest');
        
            if(!empty($validated['has_details']) && $validated['has_details'] == 1) {
                $hostel = Hostel::create([
                    'name'        => $validated['hostel']['name'],
                    'slug'        => $validated['hostel']['slug'],
                    'location'    => $validated['hostel']['location'],
                    'phone'       => $validated['hostel']['phone'],
                    'description' => 'description',
                    'created_by'     => $user->id, // 🔥 BEST PRACTICE
                ]); 
            }
        });

        if ($hostel) {
            
            $superAdmin = User::role('super_admin')->first();
            
            if ($superAdmin) {
                $superAdmin->notify(new HostelAdminRequest($hostel));
            }
            
            if($user){    
                $user->notify(new HostelRequestPendingEmail($hostel));
            }
        }

        event(new Registered($user));

        Auth::login($user);

        if (session()->has('booking_data')) {
            session()->flash('success', 'Account created successfully. Please complete your booking.');
            return redirect()->route('tenant.roomDetails', [
                'id' => session('booking_data.room_id'),
                'slug' => Room::findOrFail(session('booking_data.room_id'))->hostel->slug,
            ]);
        }

        return redirect(route('user.home'));
    }
}
