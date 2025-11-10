@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.source.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.sources.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.source.fields.id') }}
                        </th>
                        <td>
                            {{ $source->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.source.fields.name') }}
                        </th>
                        <td>
                            {{ $source->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.source.fields.slug') }}
                        </th>
                        <td>
                            {{ $source->slug }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.source.fields.image') }}
                        </th>
                        <td>
                            @if($source->image)
                                <a href="{{ $source->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $source->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.source.fields.sort_description') }}
                        </th>
                        <td>
                            {{ $source->sort_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.source.fields.description') }}
                        </th>
                        <td>
                            {!! $source->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.source.fields.meta_title') }}
                        </th>
                        <td>
                            {{ $source->meta_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.source.fields.meta_description') }}
                        </th>
                        <td>
                            {{ $source->meta_description }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.sources.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection