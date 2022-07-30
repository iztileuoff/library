<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => 'Book title ' . $this->faker->word,
            'count' => $this->faker->numberBetween(5, 10),
            'category_id' => $this->faker->numberBetween(1, 20),
            'author_id' => $this->faker->numberBetween(1, 10)
        ];
    }
}
