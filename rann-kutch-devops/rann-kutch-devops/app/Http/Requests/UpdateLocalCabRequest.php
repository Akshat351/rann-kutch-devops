<?php

namespace App\Http\Requests;

use App\Models\LocalCab;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateLocalCabRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('local_cab_edit');
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
                'unique:local_cabs,slug,' . request()->route('local_cab')->id,
            ],
            'meta_title' => [
                'string',
                'nullable',
            ],
            'mini_eight_hr_eighty_km' => ['required', 'numeric', 'min:0', 'max:99999'],
            'mini_ten_hr_hundred_km' => ['required', 'numeric', 'min:0', 'max:99999'],
            'mini_twelve_hr_hundred_twenty_km' => ['required', 'numeric', 'min:0', 'max:99999'],
            'sedan_eight_hr_eighty_km' => ['required', 'numeric', 'min:0', 'max:99999'],
            'sedan_ten_hr_hundred_km' => ['required', 'numeric', 'min:0', 'max:99999'],
            'sedan_twelve_hr_hundred_twenty_km' => ['required', 'numeric', 'min:0', 'max:99999'],
            'ertiga_eight_hr_eighty_km' => ['required', 'numeric', 'min:0', 'max:99999'],
            'ertiga_ten_hr_hundred_km' => ['required', 'numeric', 'min:0', 'max:99999'],
            'ertiga_twelve_hr_hundred_twenty_km' => ['required', 'numeric', 'min:0', 'max:99999'],
        ];
    }
}
