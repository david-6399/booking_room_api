<?php

namespace App\Models;

use App\Models\Scopes\hostelOwnerScope;
use App\Enums\roomStatus;
use Database\Factories\roomFactory;
use Illuminate\Database\Eloquent\Attributes\UseFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

#[UseFactory(roomFactory::class)]
class Room extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;


    protected $guarded = ['id'];

    protected function casts(): array
    {
        return [    
            'status' => roomStatus::class,
        ];
    }

    public function roomType()
    {
        return $this->belongsTo(Room_type::class, 'room_type_id', 'id');
    }

    public function bookings()
    {
        return $this->belongsToMany(User::class, 'bookings', 'room_id', 'user_id')
                ->withPivot('check_in_date', 'check_out_date', 'status', 'payment_status', 'total_amount');
    }   

    public function hostel()
    {
        return $this->belongsTo(Hostel::class, 'hostel_id', 'id');
    }



    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('roomImages');
    }
    
    protected static function booted()  
    {
        static::addGlobalScope(new hostelOwnerScope);
    }

    
}
