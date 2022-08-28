<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ThreadFactory extends Factory
{
    public function definition()
    {
        return [
            'user_id' => 1,
            'title' => $this->faker->sentence(5)
        ];
    }
}
