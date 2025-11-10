@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.airport.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.airports.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.airport.fields.id') }}
                        </th>
                        <td>
                            {{ $airport->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.airport.fields.name') }}
                        </th>
                        <td>
                            {{ $airport->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.airport.fields.slug') }}
                        </th>
                        <td>
                            {{ $airport->slug }}
                        </td>
                    </tr>
                     <tr>
                        <th>
                            {{ trans('cruds.airport.fields.source') }}
                        </th>
                        <td>
                            {{ $airport->source->name ?? '' }}
                        </td>
                    </tr>
                     <tr>
                        <th>{{ trans('cruds.airport.fields.distance') }}</th>
                        <td>{{ $airport->distance }}</td>
                    </tr>
                     <tr>
                        <th>{{ trans('cruds.airport.fields.mini') }}</th>
                        <td>{{ $airport->mini }}</td>
                    </tr>
                    <tr>
                        <th>{{ trans('cruds.airport.fields.sedan') }}</th>
                        <td>{{ $airport->sedan }}</td>
                    </tr>
                    <tr>
                        <th>{{ trans('cruds.airport.fields.suv') }}</th>
                        <td>{{ $airport->suv }}</td>
                    </tr>
                    <tr>
                        <th>{{ trans('cruds.airport.fields.innova') }}</th>
                        <td>{{ $airport->innova }}</td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.airport.fields.image') }}
                        </th>
                        <td>
                            @if($airport->image)
                                <a href="{{ $airport->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $airport->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.airport.fields.sort_description') }}
                        </th>
                        <td>
                            {{ $airport->sort_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.airport.fields.description') }}
                        </th>
                        <td>
                            {!! $airport->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.airport.fields.meta_title') }}
                        </th>
                        <td>
                            {{ $airport->meta_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.airport.fields.meta_description') }}
                        </th>
                        <td>
                            {{ $airport->meta_description }}
                        </td>
                    </tr>
                    
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.airports.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection