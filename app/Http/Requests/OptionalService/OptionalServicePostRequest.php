<?php

namespace App\Http\Requests\OptionalService;

use Illuminate\Foundation\Http\FormRequest;

class OptionalServicePostRequest extends FormRequest
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
            'name' => ['required', 'array'],
            'name.*' => ['required', 'string:ascii', 'max:100'],
            'u_price' => ['required', 'numeric'],
            'by_person' => ['required', 'boolean'],
            'nb_day' => ['required', 'numeric:integer']
        ];
    }
}
