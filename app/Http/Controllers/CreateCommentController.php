<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentRequest;
use App\Models\Comment;

class CreateCommentController extends Controller
{
    public function __invoke(CreateCommentRequest $request)
    {
        // Commentオブジェクト
        $comment = new Comment();

        // 入力された値を取得
        $threadId = $request->threadId();
        $comment->threadId = $threadId;
        $comment->displayName = $request->displayName();
        $comment->text = $request->text();

        // 保存
        $comment->save();

        // Threadページを返す
        return redirect(route('threadPage', [
            'threadId' => $threadId
        ]));
    }
}
