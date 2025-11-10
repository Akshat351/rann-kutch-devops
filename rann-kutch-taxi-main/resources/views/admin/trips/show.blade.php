@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.trip.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.trips.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.trip.fields.id') }}
                        </th>
                        <td>
                            {{ $trip->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trip.fields.name') }}
                        </th>
                        <td>
                            {{ $trip->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trip.fields.slug') }}
                        </th>
                        <td>
                            {{ $trip->slug }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trip.fields.image') }}
                        </th>
                        <td>
                            @if($trip->image)
                                <a href="{{ $trip->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $trip->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trip.fields.trip_type') }}
                        </th>
                        <td>
                            {{ App\Models\Trip::TRIP_TYPE_SELECT[$trip->trip_type] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trip.fields.mini') }}
                        </th>
                        <td>
                            {{ $trip->mini }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trip.fields.mini_round_trip') }}
                        </th>
                        <td>
                            {{ $trip->mini_round_trip }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trip.fields.sedan') }}
                        </th>
                        <td>
                            {{ $trip->sedan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trip.fields.ertiga') }}
                        </th>
                        <td>
                            {{ $trip->ertiga }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.trip.fields.innova') }}
                        </th>
                        <td>
                            {{ $trip->innova }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.trip.fields.sort_description') }}
                        </th>
                        <td>
                            {{ $trip->sort_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trip.fields.schema') }}
                        </th>
                        <td>
                            {{ $trip->schema }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trip.fields.description') }}
                        </th>
                        <td>
                            {!! $trip->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trip.fields.meta_title') }}
                        </th>
                        <td>
                            {{ $trip->meta_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trip.fields.meta_description') }}
                        </th>
                        <td>
                            {{ $trip->meta_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trip.fields.source') }}
                        </th>
                        <td>
                            {{ $trip->source->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.trip.fields.destination') }}
                        </th>
                        <td>
                            {{ $trip->destination->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.trips.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
