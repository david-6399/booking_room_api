<?php

namespace database\seeders;

use App\Models\booking;
use App\Models\hostel;
use App\Models\room;
use App\Models\room_type;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'guest']);
        Role::create(['name' => 'super_admin']);
        
        // $this->call(roleAndPermissionSeeder::class);
        // User::factory(10)->create();

        // Hostel::factory(10)->create();
        // Room_type::factory(4)->create();
        // booking::factory(20)->create();
        // Room::factory(50)->create();

    }
}
