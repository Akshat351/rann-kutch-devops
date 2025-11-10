<?php

namespace App\Http\Requests;

use App\Models\BlogCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreBlogCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('blog_category_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'slug' => [
                'string',
                'required',
                'unique:blog_categories',
            ],
            'small_description' => [
                'required',
            ],
            'long_description' => [
                'required',
            ],
            'meta_title' => [
                'string',
                'nullable',
            ],
        ];
    }
}
