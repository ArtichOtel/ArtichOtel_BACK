<?php

namespace App\Http\Requests\Advantage;

use Illuminate\Foundation\Http\FormRequest;

class AdvantageUpdateRequest extends FormRequest
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
            'description' => ['sometimes', 'array'],
            'description.*' => ['sometimes', 'max:300', 'string:ascii'],
            'icon' => ['sometimes', 'max:20', 'string:ascii'],
            'order' => ['sometimes', 'numeric:integer'],
        ];
    }
}