<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserCustomerPostRequest extends FormRequest
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
            'email' => ['required', 'email:rfc,dns'],
            'password' => ['required', 'string:ascii', 'max:100'],
            'pseudo' => ['nullable', 'string:ascii', 'max:45'],
            'role_id' => ['required', 'numeric:integer'],
            'first_name' => ['required', 'string:ascii', 'max:45'],
            'last_name' => ['required', 'string:ascii', 'max:45'],
        ];
    }
}
