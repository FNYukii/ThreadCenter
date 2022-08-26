<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateThreadRequest;
use App\Models\Thread;

class CreateThreadController extends Controller
{
    public function __invoke(CreateThreadRequest $request)
    {
        // Threadオブジェクトを生成
        $thread = new Thread();

        // FormRequestから入力された値を取得
        $thread->title = $request->title();

        // 新規Threadをデータベースに保存
        $thread->save();

        // Topページを返す
        return redirect()->route('topPage');
    }
}
