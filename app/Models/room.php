<?php

namespace App\Models;

use App\roomStatus;
use Illuminate\Database\Eloquent\Model;

class room extends Model
{
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
}
