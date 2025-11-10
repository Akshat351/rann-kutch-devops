@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.destination.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.destinations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.destination.fields.id') }}
                        </th>
                        <td>
                            {{ $destination->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.destination.fields.name') }}
                        </th>
                        <td>
                            {{ $destination->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.destination.fields.slug') }}
                        </th>
                        <td>
                            {{ $destination->slug }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.destination.fields.image') }}
                        </th>
                        <td>
                            @if($destination->image)
                                <a href="{{ $destination->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $destination->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.destination.fields.sort_description') }}
                        </th>
                        <td>
                            {{ $destination->sort_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.destination.fields.description') }}
                        </th>
                        <td>
                            {!! $destination->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.destination.fields.meta_title') }}
                        </th>
                        <td>
                            {{ $destination->meta_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.destination.fields.meta_description') }}
                        </th>
                        <td>
                            {{ $destination->meta_description }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.destinations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection