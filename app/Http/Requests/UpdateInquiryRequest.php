<?php

namespace App\Http\Requests;

use App\Models\Inquiry;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateInquiryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('inquiry_edit');
    }

    public function rules()
    {
        return [
            'ip' => [
                'string',
                'nullable',
            ],
            'mobile' => [
                'string',
                'nullable',
            ],
            'email' => [
                'string',
                'nullable',
            ],
            'name' => [
                'string',
                'nullable',
            ],
            'subject' => [
                'string',
                'nullable',
            ],
            'page_url' => [
                'string',
                'nullable',
            ],
        ];
    }
}
