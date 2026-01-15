<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class roomTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->randomElement(['Single', 'Double', 'Suite', 'Deluxe']),
            'description' => $this->faker->sentence(),
            'hostel_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
