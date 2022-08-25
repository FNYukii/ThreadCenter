<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    public function definition()
    {
        return [
            'threadId' => 99,
            'displayName' => $this->faker->name(1),
            'text' => $this->faker->sentence(10)
        ];
    }
}
