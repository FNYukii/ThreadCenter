<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadPageController extends Controller
{
    public function __invoke(Request $request)
    {
        // RequestからthreadIdを取得
        $threadId = (int) $request->route('threadId');

        // 指定のThreadを取得
        $thread = Thread::where('id', $threadId)->firstOrFail();

        // 指定のThreadに投稿されたCommentを全て取得
        $comments = Comment::where('threadId', $thread->id)->orderBy('created_at', 'DESC')->get();

        return view('Pages.ThreadPage')
        ->with('thread', $thread)
        ->with('comments', $comments);
    }
}
