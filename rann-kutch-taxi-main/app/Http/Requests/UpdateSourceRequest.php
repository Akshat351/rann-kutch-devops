<?php

namespace App\Http\Requests;

use App\Models\Source;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSourceRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('source_edit');
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
                'unique:sources,slug,' . request()->route('source')->id,
            ],
            'meta_title' => [
                'string',
                'nullable',
            ],
        ];
    }
}
