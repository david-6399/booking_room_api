<?php

namespace App\Models;

use App\Models\Scopes\hostelOwnerScope;
use App\Models\Scopes\TenantScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Livewire\WithPagination;

class Booking extends Model
{
    /** @use HasFactory<\Database\Factories\BookingFactory> */
    use HasFactory , WithPagination;


    protected $guarded = ['id'];

    protected $table = 'bookings';

    public function casts(): array
    {
        return [
            'payment_status' => \App\Enums\paymentStatus::class,
            'booking_status' => \App\Enums\bookingStatus::class,
            'check_in_date' => 'date',
            'check_out_date' => 'date',
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
        static::addGlobalScope(new TenantScope);
    }

}
