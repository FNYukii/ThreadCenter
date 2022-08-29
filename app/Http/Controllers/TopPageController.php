<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class TopPageController extends Controller
{
    public function __invoke(Request $request)
    {
        // 全てのThreadを取得
        $threads = Thread::orderBy('created_at', 'DESC')->get();

        // Bladeを返す
        return view('pages.top_page')
        ->with('threads', $threads);
    }
}
