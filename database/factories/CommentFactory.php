<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    public function definition()
    {
        return [
            'threadId' => 99,
            'text' => $this->faker->realText(20)
        ];
    }
}
