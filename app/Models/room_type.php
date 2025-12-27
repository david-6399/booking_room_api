<?php

namespace App\Models;

use App\Models\Scopes\hostelOwnerScope;
use Database\Factories\roomTypeFactory;
use Illuminate\Database\Eloquent\Attributes\UseFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[UseFactory(roomTypeFactory::class)]

class Room_type extends Model
{
    use HasFactory;


    protected $guarded = ['id','hostel_id'];

    protected $table = 'room_types';

    public function rooms()
    {
        return $this->hasMany(room::class, 'room_type_id', 'id');
    }

    public function hostel()
    {
        return $this->belongsTo(hostel::class, 'hostel_id', 'id');
    }

    protected static function booted(): void
    {
        static::addGlobalScope(new hostelOwnerScope);
    }
}
