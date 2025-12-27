<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\hostel>
 */
class hostelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'description' => $this->faker->paragraph(),
            'slug' => $this->faker->slug(),
            'location' => $this->faker->address(),
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            // Assuming user with ID 1 exists must be uniq
            'created_by' => User::factory()
        ];
    }
}
