<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    public function definition()
    {
        return [
            'user_id' => 1,
            'threadId' => 1,
            'displayName' => $this->faker->name(1),
            'text' => $this->faker->sentence(10)
        ];
    }
}
