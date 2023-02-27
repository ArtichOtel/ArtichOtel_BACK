<?php

namespace App\Http\Requests\NewInfo;

use Illuminate\Foundation\Http\FormRequest;

class NewInfoUpdateRequest extends FormRequest
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
            'title' => ['sometimes', 'max:60', 'string:ascii'],
            'description' => ['sometimes', 'max:300', 'string:ascii'],
            'url_image' => ['sometimes', 'max:255', 'url'],
            'order' => ['sometimes', 'numeric:integer']
        ];
    }
}
