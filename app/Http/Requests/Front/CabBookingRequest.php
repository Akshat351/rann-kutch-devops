<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Http;
use Closure;
use Illuminate\Validation\Rule;

class CabBookingRequest extends FormRequest
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
    protected function prepareForValidation()
    {
        if ($this->pickup_date) {
            $this->merge([
                'pickup_date' => date('Y-m-d', strtotime($this->pickup_date)),
            ]);
        }
        if (!empty($this->return_date)) {
            $this->merge([
                'return_date' => date('Y-m-d', strtotime($this->return_date)),
            ]);
        }
    }

    public function rules(): array
    {
        
        return [
            'source_id' => [
                Rule::requiredIf(function () {
                    // local → required
                    if ($this->trip_type === 'local') {
                        return true;
                    }

                    // one-way & round-trip → always required
                    if (in_array($this->trip_type, ['one-way', 'round-trip', 'tempo'])) {
                        return true;
                    }

                    // airport → required only if "drop-to-airport"
                    return $this->trip_type === 'airport' && $this->airport_service_type === 'drop-to-airport';
                }),
                'exists:sources,id',
            ],

            // destination_id validation
            'destination_id' => [
                Rule::requiredIf(function () {
                    // local → required
                    if ($this->trip_type === 'local') {
                        return false;
                    }
                    // one-way & round-trip → always required
                    if (in_array($this->trip_type, ['one-way', 'round-trip', 'tempo'])) {
                        return true;
                    }

                    // airport → required only if "pickup-from-airport"
                    return $this->trip_type === 'airport' && $this->airport_service_type === 'pickup-from-airport';
                }),
                'exists:destinations,id',
            ],
            // 'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:10',
            'pickup_date' => 'required|date|after_or_equal:today',
            // 'pickup_time' => 'required|date_format:H:i',
            'return_date' => 'date|nullable|required_if:trip_type,round-trip,tempo',
            // 'return_time' => 'date_format:H:i|nullable|required_if:trip_type,1',
            'car_type'    => 'required|string',
            'trip_type' => 'required|string|in:one-way,round-trip,airport,local,tempo',
        ];
    }

    public function messages()
    {
        return [
            'source_id' => 'The pickup city field is required.',
            'destination_id' => 'The drop city field is required.',
            'pickup_date.after_or_equal' => 'The pickup date must be today or a future date.',
            'return_date.after' => 'The return date must be after the pickup date.',
            'return_date' => 'The return date field is required.',
            'return_time' => 'The return time field is required.',

        ];
    }
}
