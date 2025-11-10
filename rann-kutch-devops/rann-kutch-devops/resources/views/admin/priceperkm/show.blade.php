@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.priceperkm.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.priceperkm.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.priceperkm.fields.id') }}
                        </th>
                        <td>
                            {{ $priceperkm->id }}
                        </td>
                    </tr>
                    {{-- <tr>
                        <th>
                            {{ trans('cruds.priceperkm.fields.mini_price_per_km') }}
                        </th>
                        <td>
                            {{ $priceperkm->mini_price_per_km }}
                        </td>
                    </tr> --}}
                    <tr>
                        <th>
                            {{ trans('cruds.priceperkm.fields.sedan_price_per_km') }}
                        </th>
                        <td>
                            {{ $priceperkm->sedan_price_per_km }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.priceperkm.fields.suv_price_per_km') }}
                        </th>
                        <td>
                            {!! $priceperkm->suv_price_per_km !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.priceperkm.fields.innova_price_per_km') }}
                        </th>
                        <td>
                            {{ $priceperkm->innova_price_per_km }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.priceperkm.fields.driver_allowance_per_day') }}
                        </th>
                        <td>
                            {{ $priceperkm->driver_allowance_per_day }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.priceperkm.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
