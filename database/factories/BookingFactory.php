<?php

namespace Database\Factories;

use Carbon\Carbon;
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
    private $checkIn ;
    private function randomDateBetween($start, $end)
    {
        return Carbon::createFromTimestamp(
            rand(
                Carbon::parse($start)->timestamp,
                Carbon::parse($end)->timestamp
            )
        )->format('Y-m-d');
    }

    public function definition(): array
    {
        $this->checkIn = $this->randomDateBetween('2025/06/01', '2025/12/30');
        return [
            'user_id' => \App\Models\User::factory(),
            'room_id' => \App\Models\room::factory(),
            'check_in_date' => $this->checkIn,
            'check_out_date' => Carbon::parse($this->checkIn)->addDays(rand(1,14)),
            'status' => $this->faker->randomElement(['pending',  'confirmed', 'checked_in', 'checked_out', 'canceled']),
            'payment_status' => $this->faker->randomElement(['pending', 'completed', 'failed']),
            'total_amount' => $this->faker->randomFloat(2, 50, 500),
            'hostel_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
