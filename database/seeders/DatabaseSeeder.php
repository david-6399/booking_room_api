<?php

namespace Database\Seeders;

use App\Models\booking;
use App\Models\room;
use App\Models\room_type;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(roleAndPermissionSeeder::class);
        room_type::factory(4)->create();
        booking::factory(20)->create();
        room::factory(50)->create();
    }
}
