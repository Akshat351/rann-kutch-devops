@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.blogPost.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.blog-posts.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.blogPost.fields.id') }}
                        </th>
                        <td>
                            {{ $blogPost->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.blogPost.fields.title') }}
                        </th>
                        <td>
                            {{ $blogPost->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.blogPost.fields.slug') }}
                        </th>
                        <td>
                            {{ $blogPost->slug }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.blogPost.fields.small_description') }}
                        </th>
                        <td>
                            {{ $blogPost->small_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.blogPost.fields.long_description') }}
                        </th>
                        <td>
                            {!! $blogPost->long_description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.blogPost.fields.main_image') }}
                        </th>
                        <td>
                            @if($blogPost->main_image)
                                <a href="{{ $blogPost->main_image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $blogPost->main_image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.blogPost.fields.meta_title') }}
                        </th>
                        <td>
                            {{ $blogPost->meta_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.blogPost.fields.meta_description') }}
                        </th>
                        <td>
                            {{ $blogPost->meta_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.blogPost.fields.blog_category') }}
                        </th>
                        <td>
                            @foreach($blogPost->blog_categories as $key => $blog_category)
                                <span class="label label-info">{{ $blog_category->title }}</span>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.blog-posts.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection