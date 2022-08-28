<?php

namespace Database\Seeders;

use App\Models\Thread;
use Illuminate\Database\Seeder;

class ThreadsSeeder extends Seeder
{
    public function run()
    {
        Thread::factory()->count(10)->create();
    }
}
