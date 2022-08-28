<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    public function run()
    {
        Comment::factory()->count(10)->create();
    }
}
