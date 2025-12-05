<?php

namespace App\Models;

use App\roomStatus;
use Database\Factories\roomFactory;
use Illuminate\Database\Eloquent\Attributes\UseFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


#[UseFactory(roomFactory::class)]
class room extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_number',
        'capacity',
        'room_type_id',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'status' => roomStatus::class,
        ];
    }

    public function roomType()
    {
        return $this->belongsTo(room_type::class, 'room_type_id', 'id');
    }

    public function bookings()
    {
        return $this->belongsToMany(User::class, 'bookings', 'room_id', 'user_id')
                ->withPivot('check_in_date', 'check_out_date', 'status', 'payment_status', 'total_amount');
    }   
}
