<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
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
            'guest' => $this->faker->name(),
            'orderDate' => $this->faker->date(),
            'checkIn' => $this->faker->date(),
            'checkOut' => $this->faker->date(),
            'special' => $this->faker->optional()->sentence(),
            'roomType' => $this->faker->randomElement([
                'Single', 'Double', 'Suite', 'Single Bed', 'Double Bed', 'Deluxe Suite'
            ]),
            'roomNumber' => $this->faker->numberBetween(100, 999),
            'bookStatus' => $this->faker->randomElement(['in', 'out', 'progress']),
            'photo' => json_encode(['img1.jpg', 'img2.jpg']),
        ];
    }
}
