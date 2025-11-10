<?php

namespace App\Http\Requests;

use App\Models\PricePerKilometer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPricePerKmRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('priceperkm_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:price_per_kilometer,id',
        ];
    }
}
