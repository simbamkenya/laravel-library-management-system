<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Fine;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\\Notification>
 */
class NotificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'amount' => fake()->randomNumber(),
            'fine_id' => Fine::factory(1)->create()->first(),
        ];
    }
}
