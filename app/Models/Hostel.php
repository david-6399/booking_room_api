<?php

namespace App\Models;

use App\FiltersByRole;
use App\hostelStatus;
use App\Models\Scopes\hostelOwnerScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hostel extends Model
{
    use HasFactory;

    

    protected $guarded = ['id','created_by'];

    protected $table = 'hostels';

    public function casts(): array
    {
        return [
            'status' => hostelStatus::class,
        ];
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function rooms()
    {
        return $this->hasMany(Room::class, 'hostel_id', 'id');
    }

    public function roomTypes()
    {
        return $this->hasMany(Room_type::class, 'hostel_id', 'id');
    }
    

    protected static function booted(): void
    {
        static::addGlobalScope(new hostelOwnerScope);
    }
}
