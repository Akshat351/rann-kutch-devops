<?php

namespace App\Http\Requests;

use App\Models\Destination;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateDestinationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('destination_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'slug' => [
                'string',
                'required',
                'unique:destinations,slug,' . request()->route('destination')->id,
            ],
            'meta_title' => [
                'string',
                'nullable',
            ],
        ];
    }
}
