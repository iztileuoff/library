<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_id' => $this->faker->numberBetween(1, 200),
            'book_id' => $this->faker->numberBetween(1, 50),
            'taken_day' => $this->faker->date('Y_m_d')
        ];
    }
}
