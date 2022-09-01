<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ThreadFactory extends Factory
{
    public function definition()
    {
        return [
            'user_id' => rand(1, 10),
            'title' => $this->faker->sentence(5)
        ];
    }
}
