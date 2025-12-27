<?php

namespace App\Models;

use App\Models\Scopes\hostelOwnerScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /** @use HasFactory<\Database\Factories\BookingFactory> */
    use HasFactory;


    protected $guarded = ['id','hostel_id'];

    protected $table = 'bookings';

    public function casts(): array
    {
        return [
            'payment_status' => \App\paymentStatus::class,
            'booking_status' => \App\bookingStatus::class,
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id', 'id');
    }

    public function hostel()
    {
        return $this->belongsTo(Hostel::class, 'hostel_id', 'id');
    }

    

    protected static function booted(): void
    {
        static::addGlobalScope(new hostelOwnerScope);
    }

}
