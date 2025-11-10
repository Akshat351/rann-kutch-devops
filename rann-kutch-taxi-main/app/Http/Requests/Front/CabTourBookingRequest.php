<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class CabTourBookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'        => ['nullable', 'string', 'max:100'],
            'mobile'      => ['required', 'digits:10'],
            'pickup_date' => ['required', 'date', 'after_or_equal:today'],
            'pickup_time' => ['required'],
            'people'      => ['nullable', 'integer', 'min:1', 'max:20'],
            'car_type'    => ['required', 'in:Suv,Sedan,Innova,Mini'],
            'trip_type' => 'required|string|in:tour',
            'tour_package_id' => [
                'required',
                'exists:tour_packages,id',
            ],
        ];
    }
}
