<?php

namespace App\Models;

use App\FiltersByRole;
use App\Enums\hostelStatus;
use App\Models\Scopes\hostelOwnerScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Hostel extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    

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
    

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('hostelImages');
    }


    protected static function booted(): void
    {
        static::addGlobalScope(new hostelOwnerScope);
    }

}
