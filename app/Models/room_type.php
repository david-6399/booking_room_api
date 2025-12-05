<?php

namespace App\Models;

use Database\Factories\roomTypeFactory;
use Illuminate\Database\Eloquent\Attributes\UseFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[UseFactory(roomTypeFactory::class)]

class room_type extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price_per_night',
        'description',
    ];

    protected $table = 'room_types';

    public function rooms()
    {
        return $this->hasMany(room::class, 'room_type_id', 'id');
    }
}
