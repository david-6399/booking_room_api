<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    /** @use HasFactory<\Database\Factories\BookingFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'room_id',
        'check_in_date',
        'check_out_date',
        'status',
        'payment_status',
        'total_amount',
    ];

    public function casts(): array
    {
        return [
            'payment_status' => \App\paymentStatus::class,
            'booking_status' => \App\bookingStatus::class,
        ];
    }

}
