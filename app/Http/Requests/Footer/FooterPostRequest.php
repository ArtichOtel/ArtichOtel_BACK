<?php

namespace App\Http\Requests\Footer;

use Illuminate\Foundation\Http\FormRequest;

class FooterPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
            'order' => ['required', 'numeric:integer'],
        ];
    }
}
