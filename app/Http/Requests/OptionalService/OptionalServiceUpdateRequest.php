<?php

namespace App\Http\Requests\OptionalService;

use Illuminate\Foundation\Http\FormRequest;

class OptionalServiceUpdateRequest extends FormRequest
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
            'name' => ['sometimes', 'array'],
            'name.*' => ['sometimes', 'string:ascii', 'max:100'],
            'u_price' => ['sometimes', 'numeric'],
            'by_person' => ['sometimes', 'boolean'],
            'nb_day' => ['sometimes', 'numeric:integer']
        ];
    }
}
