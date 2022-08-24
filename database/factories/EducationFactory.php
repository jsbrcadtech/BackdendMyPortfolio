<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'name' => $this->faker->name(),
            'description' => $this->faker->paragraph,
            'startdate' => $this->faker->date,
            'enddate' => $this->faker->date,
        ];
    }
}
