<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BackgroundFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle,
            'name' => $this->faker->word,
            'startdate' => $this->faker->date,
            'enddate' => $this->faker->date,
            'description' => $this->faker->paragraph,

        ];
    }
}
