<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ThreadCard extends Component
{
    public $thread;

    public function __construct($thread)
    {
        $this->thread = $thread;
    }

    public function render()
    {
        return view('components.thread-card');
    }
}
