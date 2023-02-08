<?php

namespace App\Http\Requests\Advantage;

use Illuminate\Foundation\Http\FormRequest;

class AdvantagePostRequest extends FormRequest
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
            'title' => ['required', 'max:60', 'string:ascii'],
            'description' => ['required', 'max:300', 'string:ascii'],
            'icon' => ['required', 'max:20', 'string:ascii'],
            'order' => ['required', 'numeric:integer'],

        ];
    }
}
