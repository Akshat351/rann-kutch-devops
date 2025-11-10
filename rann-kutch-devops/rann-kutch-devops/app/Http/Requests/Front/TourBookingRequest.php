<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TourBookingRequest extends FormRequest
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
            'trip_type'     => 'required|in:tour',
            'tour_id'       => 'required|string|max:255',
            'tour_ids'      => 'required|integer|exists:tour_packages,id',
            'mobile'        => 'required|digits:10',

            // ✅ check if slug exists in tour_packages
            'package_slug'  => [
                'required',
                'string',
                'max:255',
                Rule::exists('tour_packages', 'slug'),
            ],

            // ✅ check if slug exists in tour_categories
            'category_slug' => [
                'required',
                'string',
                'max:255',
                Rule::exists('tour_categories', 'slug'),
            ],
        ];
    }
}
