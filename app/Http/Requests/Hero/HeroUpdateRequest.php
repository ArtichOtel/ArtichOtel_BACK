<?php

namespace App\Http\Requests\Hero;

use Illuminate\Foundation\Http\FormRequest;

class HeroUpdateRequest extends FormRequest
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
            'title' => ['sometimes', 'array'],
            'title.*' => ['sometimes', 'max:60', 'string:ascii'],
            'subtitle' => ['sometimes', 'array'],
            'subtitle.*' => ['sometimes', 'max:60', 'string:ascii'],
            'url_image' => ['sometimes', 'url'],
        ];
    }
}
