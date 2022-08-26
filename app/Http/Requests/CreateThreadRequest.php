<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateThreadRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|max:140'
        ];
    }

    public function title(): string
    {
        // Formに入力された値を返す
        return $this->input('title');
    }
}
