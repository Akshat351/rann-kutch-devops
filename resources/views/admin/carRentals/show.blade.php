@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.carRental.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.car-rentals.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.carRental.fields.id') }}
                        </th>
                        <td>
                            {{ $carRental->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.carRental.fields.name') }}
                        </th>
                        <td>
                            {{ $carRental->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.carRental.fields.slug') }}
                        </th>
                        <td>
                            {{ $carRental->slug }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.carRental.fields.image') }}
                        </th>
                        <td>
                            @if($carRental->image)
                                <a href="{{ $carRental->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $carRental->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.carRental.fields.sort_description') }}
                        </th>
                        <td>
                            {{ $carRental->sort_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.carRental.fields.description') }}
                        </th>
                        <td>
                            {!! $carRental->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.carRental.fields.meta_title') }}
                        </th>
                        <td>
                            {{ $carRental->meta_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.carRental.fields.meta_description') }}
                        </th>
                        <td>
                            {{ $carRental->meta_description }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.car-rentals.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection