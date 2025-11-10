<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Http;
use Closure;

class InquiryRequest extends FormRequest
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
            'name'      => 'required|string|max:255',
            'email'     => 'nullable|email:rfc,dns|max:191',
            'mobile'    => 'required|digits:10',
            'subject'   => 'nullable|string|max:5000',
           'service_type' => ($this->has('contact_form') || $this->has('blog_page') || $this->has('home_form'))
    ? 'nullable'
    : 'required|string|in:local,outstation,airport,sightseeing,tour,tempo',

            'page_url'  => 'required|url|max:255',
            'bot' => [
                'required',
                'string',
                'in:bot'
            ],
            'bot_capture' => [
                'nullable',
            ],
            'g-recaptcha-response' => [
                'nullable',

                function (string $attribute, mixed $value, Closure $fail) {
                    $response = Http::withOptions([
                        'verify' => false // Disable SSL certificate verification
                    ])->post('https://www.google.com/recaptcha/api/siteverify', [
                        'secret' => config('settings.captcha_secret_key'),
                        'response' => $value,
                    ]);
                }
            ],
        ];
    }
}
