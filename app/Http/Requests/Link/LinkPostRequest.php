<?php

namespace App\Http\Requests\Link;

use Illuminate\Foundation\Http\FormRequest;

class LinkPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'text' => ['required', 'array'],
            'text.*' => ['required', 'max:20', 'string:ascii'],
            'url' => ['required', 'url', 'max:255'],
            'icon' => ['sometimes', 'string:ascii', 'max:20']
        ];
    }
}
