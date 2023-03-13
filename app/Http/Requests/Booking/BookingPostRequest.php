<?php

namespace App\Http\Requests\Booking;

use Illuminate\Foundation\Http\FormRequest;

class BookingPostRequest extends FormRequest
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
            'begin_date' => ['required', 'date'],
            'end_date' => ['required', 'date'],
            'rooms_id' => ['required', 'numeric:integer'],
            'customers_id' => ['required', 'numeric:integer'],
            'status' => ['required', 'string:ascii', 'max:40'],
            'nbrs_people' => ['required', 'numeric:integer', 'between:1,3'],
        ];
    }
}
