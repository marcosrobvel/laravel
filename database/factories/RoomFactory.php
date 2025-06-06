<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'photo' => json_encode(['img1.jpg', 'img2.jpg']),
        'roomNumber' => fake()->unique()->numberBetween(100, 999),
        'roomType' => Arr::random(['Single', 'Double', 'Suite']),
        'amenities' => 'WiFi, TV, AC',
        'price' => fake()->randomFloat(2, 50, 500),
        'offer_price' => fake()->randomFloat(2, 40, 450),
        'status' => 'available',
    ];
    }
}
