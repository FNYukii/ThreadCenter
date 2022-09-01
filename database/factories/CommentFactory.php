<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    public function definition()
    {
        return [
            'user_id' => rand(1, 10),
            'thread_id' => rand(1, 10),
            'text' => $this->faker->sentence(10)
        ];
    }
}
