<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateThreadRequest;
use App\Models\Thread;

class CreateThreadController extends Controller
{
    public function __invoke(CreateThreadRequest $request)
    {
        // Commentオブジェクトを生成
        $thread = new Thread();

        // FormRequestから入力された値を取得
        $thread->title = $request->title();

        // 新規Commentをデータベースに保存
        $thread->save();

        // Topページを返す
        return redirect()->route('topPage');
    }
}
