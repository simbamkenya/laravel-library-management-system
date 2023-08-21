<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\\Book>
 */
class BookFactory extends Factory
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
            'isbn' => $this->faker->unique()->numerify('###-##-#####-##-#'),
            'title' => $this->faker->sentence(),
            'description' => $this->faker->sentence(),
            'category_id' => Category::factory(1)->create()->first(),
            'author_id' => Author::factory(1)->create()->first(),
            'publication_date' => $this->faker->dateTime(),
            'publisher_id' => Publisher::factory(1)->create()->first(),
        ];
    }
}
