<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCommentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'threadId' => 'required',
            'displayName' => 'required|max:50',
            'text' => 'required|max:500'
        ];
    }

    public function userId(): int
    {
        return $this->user()->id;
    }

    public function threadId(): string
    {
        return $this->input('threadId');
    }

    public function displayName(): string
    {
        return $this->input('displayName');
    }

    public function text(): string
    {
        return $this->input('text');
    }
}
