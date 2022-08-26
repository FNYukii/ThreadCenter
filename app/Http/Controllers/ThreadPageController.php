<?php

namespace App\Http\Controllers;

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

        return view('Pages.ThreadPage')
        ->with('thread', $thread);
    }
}
