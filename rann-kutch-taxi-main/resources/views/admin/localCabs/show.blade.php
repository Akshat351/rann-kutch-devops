@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.show') }} {{ trans('cruds.localCab.title') }}
        </div>

        <div class="card-body">
            <div class="form-group">
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.local-cabs.index') }}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>
                                {{ trans('cruds.localCab.fields.id') }}
                            </th>
                            <td>
                                {{ $localCab->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.localCab.fields.name') }}
                            </th>
                            <td>
                                {{ $localCab->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.localCab.fields.slug') }}
                            </th>
                            <td>
                                {{ $localCab->slug }}
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2" class="bg-dark">Mini Prices</th>
                        </tr>
                        <tr>
                            <th>{{ trans('cruds.localCab.fields.mini_eight_hr_eighty_km') }}</th>
                            <td>{{ $localCab->mini_eight_hr_eighty_km }}</td>
                        </tr>
                        <tr>
                            <th>{{ trans('cruds.localCab.fields.mini_ten_hr_hundred_km') }}</th>
                            <td>{{ $localCab->mini_ten_hr_hundred_km }}</td>
                        </tr>
                        <tr>
                            <th>{{ trans('cruds.localCab.fields.mini_twelve_hr_hundred_twenty_km') }}</th>
                            <td>{{ $localCab->mini_twelve_hr_hundred_twenty_km }}</td>
                        </tr>


                        <tr>
                            <th colspan="2" class="bg-dark">Sedan Prices</th>
                        </tr>
                        <tr>
                            <th>{{ trans('cruds.localCab.fields.sedan_eight_hr_eighty_km') }}</th>
                            <td>{{ $localCab->sedan_eight_hr_eighty_km }}</td>
                        </tr>
                        <tr>
                            <th>{{ trans('cruds.localCab.fields.sedan_ten_hr_hundred_km') }}</th>
                            <td>{{ $localCab->sedan_ten_hr_hundred_km }}</td>
                        </tr>
                        <tr>
                            <th>{{ trans('cruds.localCab.fields.sedan_twelve_hr_hundred_twenty_km') }}</th>
                            <td>{{ $localCab->sedan_twelve_hr_hundred_twenty_km }}</td>
                        </tr>


                        <tr>
                            <th colspan="2" class="bg-dark">Ertiga Prices</th>
                        </tr>
                        <tr>
                            <th>{{ trans('cruds.localCab.fields.ertiga_eight_hr_eighty_km') }}</th>
                            <td>{{ $localCab->ertiga_eight_hr_eighty_km }}</td>
                        </tr>
                        <tr>
                            <th>{{ trans('cruds.localCab.fields.ertiga_ten_hr_hundred_km') }}</th>
                            <td>{{ $localCab->ertiga_ten_hr_hundred_km }}</td>
                        </tr>
                        <tr>
                            <th>{{ trans('cruds.localCab.fields.ertiga_twelve_hr_hundred_twenty_km') }}</th>
                            <td>{{ $localCab->ertiga_twelve_hr_hundred_twenty_km }}</td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.localCab.fields.sort_description') }}
                            </th>
                            <td>
                                {{ $localCab->sort_description }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.localCab.fields.description') }}
                            </th>
                            <td>
                                {!! $localCab->description !!}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.localCab.fields.meta_title') }}
                            </th>
                            <td>
                                {{ $localCab->meta_title }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.localCab.fields.meta_description') }}
                            </th>
                            <td>
                                {{ $localCab->meta_description }}
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.local-cabs.index') }}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
