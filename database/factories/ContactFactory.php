<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'photo' => 'default.jpg',
            'date' => $this->faker->date(),
            'customer' => $this->faker->name(),
            'mail' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'subject' => $this->faker->sentence(6),
            'comment' => $this->faker->paragraph(),
            'status' => $this->faker->randomElement(['', 'archived']),
        ];
    }
}
