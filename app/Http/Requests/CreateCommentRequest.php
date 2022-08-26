<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCommentRequest extends FormRequest
{
    public function authorize()
    {
        return false;
    }

    public function rules()
    {
        return [
            'title' => 'require|max:140'
        ];
    }

    public function title(): string
    {
        // Formに入力された値を返す
        return $this->input('title');
    }
}
