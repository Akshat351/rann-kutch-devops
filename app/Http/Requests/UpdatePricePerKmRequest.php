<?php

namespace App\Http\Requests;

use App\Models\PricePerKilometer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePricePerKmRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('priceperkm_edit');
    }

    public function rules()
    {
        return [
            // 'mini_price_per_km' => 'required|numeric|min:0',
            'sedan_price_per_km' => 'required|numeric|min:0',
            'suv_price_per_km' => 'required|numeric|min:0',
            'innova_price_per_km' => 'required|numeric|min:0',
            'driver_allowance_per_day' => 'required|numeric|min:0',
        ];
    }
}
