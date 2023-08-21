<?php

namespace Database\Factories;

use App\Models\IssuedBook;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\\Fine>
 */
class FineFactory extends Factory
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
            'amount' => $this->faker->randomNumber(5, true),
            'paid_at' => $this->faker->dateTimeThisMonth(),
            'issuedBook_id' => IssuedBook::factory(1)->create()->first(),
        ];
    }
}
