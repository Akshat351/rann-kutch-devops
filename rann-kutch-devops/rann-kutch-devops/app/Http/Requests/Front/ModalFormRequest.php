<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class ModalFormRequest extends FormRequest
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
            'name'        => 'required|string|max:255',
            'mobile'      => 'required|digits:10',
            'page_url'    => 'required|url|max:255',
            'description' => 'nullable|string|max:1000',
            'agree_terms' => 'accepted',
        ];
    }

    /**
     * Custom validation messages.
     */
    public function messages(): array
    {
        return [
            'name.required'        => 'Please enter your name.',
            'mobile.required'      => 'Please enter your phone number.',
            'mobile.digits'        => 'Phone number must be exactly 10 digits.',
            'page_url.required'    => 'Page URL is missing.',
            'page_url.url'         => 'Page URL must be a valid URL.',
            'description.max'      => 'Message can’t be longer than 1000 characters.',
            'agree_terms.accepted' => 'You must agree to receive updates and offers.', 
        ];
    }
}
