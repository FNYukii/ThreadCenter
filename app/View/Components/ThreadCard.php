<?php

namespace App\View\Components;

use App\Models\Comment;
use Illuminate\View\Component;

class ThreadCard extends Component
{
    public $thread;
    public $firstComment;

    public function __construct($thread)
    {
        $this->thread = $thread;
    }

    public function render()
    {
        // 最初のCommentを取得する
        $this->firstComment = Comment::where('threadId', $this->thread->id)->orderBy('created_at', 'ASC')->first();
        return view('components.thread-card');
    }
}
