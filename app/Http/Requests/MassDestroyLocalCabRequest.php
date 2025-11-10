<?php

namespace App\Http\Requests;

use App\Models\LocalCab;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyLocalCabRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('local_cab_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:local_cabs,id',
        ];
    }
}
