<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\room>
 */
class roomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'room_number' => $this->faker->unique()->numberBetween(100, 999),
            'room_type_id' => \App\Models\room_type::inRandomOrder()->first()->id,
            'status' => $this->faker->randomElement(['available', 'occupied', 'maintenance']),
            'price_per_night' => $this->faker->randomFloat(2, 50, 300),
            'capacity' => $this->faker->numberBetween(1, 4),
            'hostel_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
