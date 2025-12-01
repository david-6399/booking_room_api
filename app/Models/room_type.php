<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class room_type extends Model
{
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
