<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'room_id' => \App\Models\room::factory(),
            'check_in_date' => $this->faker->date(),
            'check_out_date' => $this->faker->date(),
            'status' => $this->faker->randomElement(['pending',  'confirmed', 'checked_in', 'checked_out', 'canceled']),
            'payment_status' => $this->faker->randomElement(['pending', 'completed', 'failed']),
            'total_amount' => $this->faker->randomFloat(2, 50, 500),
        ];
    }
}
