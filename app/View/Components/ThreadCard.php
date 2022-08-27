<?php

namespace App\View\Components;

use App\Models\Comment;
use Illuminate\View\Component;

class ThreadCard extends Component
{
    public $thread;
    public $firstComment;
    public $commentCount;

    public function __construct($thread)
    {
        $this->thread = $thread;
    }

    public function render()
    {
        // 最初のComment
        $this->firstComment = Comment::where('threadId', $this->thread->id)->orderBy('created_at', 'ASC')->first();
        
        // Commentの数
        $this->commentCount = Comment::where('threadId', $this->thread->id)->count();

        return view('components.thread-card');
    }
}
