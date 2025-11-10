<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Http;
use Closure;
use Illuminate\Validation\Rule;

class CheckFareFormRequest extends FormRequest
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
        
        $tripType    = $this->input('trip_type');
        return [
            'source_ids' => [
                Rule::requiredIf(fn() => in_array($tripType , ['airport', 'local'])),
                'nullable',
                'exists:sources,id',
            ],
            'destination_ids' => [
                Rule::requiredIf(fn() => in_array($tripType , ['one-way', 'round-trip', 'tempo'])),
                'nullable',
                'exists:destinations,id',
            ],
            'airport_ids' => [
                Rule::requiredIf(fn() => $tripType === 'airport'),
                'nullable',
                'exists:airports,id',
            ],
            'mobile' => 'required|digits:10',
        ];
    }
    public function messages()
    {
        return [
            'source_ids' => 'The pickup city field is required.',
            'destination_ids' => 'The drop city field is required.',
        ];
    }
}
