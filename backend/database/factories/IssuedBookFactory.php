<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Librarian;
use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\\IssuedBook>
 */
class IssuedBookFactory extends Factory
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
            'issued_at' =>  $this->faker->dateTime()->format('d-m-Y'),
            'expected_return_date' => $this->faker->date,
            'book_id' => Book::factory(1)->create()->first(),
            'member_id' => Member::factory(1)->create()->first(),
            'librarian_id' => Librarian::factory(1)->create()->first(),
        ];
    }
}
