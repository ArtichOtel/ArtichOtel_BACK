<?php

namespace App\Http\Requests\Booking;

use Illuminate\Foundation\Http\FormRequest;

class BookingUpdateRequest extends FormRequest
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
            'begin_date' => ['sometimes', 'date'],
            'end_date' => ['sometimes', 'date'],
            'status' => ['sometimes', 'string:ascii', 'max:40'],
            'nbrs_people' => ['sometimes', 'numeric:integer', 'between:1,3'],
        ];
    }
}
