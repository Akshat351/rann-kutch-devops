@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.inquiry.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.inquiries.update", [$inquiry->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="ip">{{ trans('cruds.inquiry.fields.ip') }}</label>
                <input class="form-control {{ $errors->has('ip') ? 'is-invalid' : '' }}" type="text" name="ip" id="ip" value="{{ old('ip', $inquiry->ip) }}">
                @if($errors->has('ip'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ip') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.inquiry.fields.ip_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="mobile">{{ trans('cruds.inquiry.fields.mobile') }}</label>
                <input class="form-control {{ $errors->has('mobile') ? 'is-invalid' : '' }}" type="text" name="mobile" id="mobile" value="{{ old('mobile', $inquiry->mobile) }}">
                @if($errors->has('mobile'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mobile') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.inquiry.fields.mobile_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.inquiry.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', $inquiry->email) }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.inquiry.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name">{{ trans('cruds.inquiry.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $inquiry->name) }}">
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.inquiry.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="subject">{{ trans('cruds.inquiry.fields.subject') }}</label>
                <input class="form-control {{ $errors->has('subject') ? 'is-invalid' : '' }}" type="text" name="subject" id="subject" value="{{ old('subject', $inquiry->subject) }}">
                @if($errors->has('subject'))
                    <div class="invalid-feedback">
                        {{ $errors->first('subject') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.inquiry.fields.subject_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.inquiry.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description', $inquiry->description) }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.inquiry.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="page_url">{{ trans('cruds.inquiry.fields.page_url') }}</label>
                <input class="form-control {{ $errors->has('page_url') ? 'is-invalid' : '' }}" type="text" name="page_url" id="page_url" value="{{ old('page_url', $inquiry->page_url) }}">
                @if($errors->has('page_url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('page_url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.inquiry.fields.page_url_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="user_id">{{ trans('cruds.inquiry.fields.user') }}</label>
                <select class="form-control select2 {{ $errors->has('user') ? 'is-invalid' : '' }}" name="user_id" id="user_id">
                    @foreach($users as $id => $entry)
                        <option value="{{ $id }}" {{ (old('user_id') ? old('user_id') : $inquiry->user->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('user'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.inquiry.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="source_id">{{ trans('cruds.inquiry.fields.source') }}</label>
                <select class="form-control select2 {{ $errors->has('source') ? 'is-invalid' : '' }}" name="source_id" id="source_id">
                    @foreach($sources as $id => $entry)
                        <option value="{{ $id }}" {{ (old('source_id') ? old('source_id') : $inquiry->source->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('source'))
                    <div class="invalid-feedback">
                        {{ $errors->first('source') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.inquiry.fields.source_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="destination_id">{{ trans('cruds.inquiry.fields.destination') }}</label>
                <select class="form-control select2 {{ $errors->has('destination') ? 'is-invalid' : '' }}" name="destination_id" id="destination_id">
                    @foreach($destinations as $id => $entry)
                        <option value="{{ $id }}" {{ (old('destination_id') ? old('destination_id') : $inquiry->destination->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('destination'))
                    <div class="invalid-feedback">
                        {{ $errors->first('destination') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.inquiry.fields.destination_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="trip_id">{{ trans('cruds.inquiry.fields.trip') }}</label>
                <select class="form-control select2 {{ $errors->has('trip') ? 'is-invalid' : '' }}" name="trip_id" id="trip_id">
                    @foreach($trips as $id => $entry)
                        <option value="{{ $id }}" {{ (old('trip_id') ? old('trip_id') : $inquiry->trip->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('trip'))
                    <div class="invalid-feedback">
                        {{ $errors->first('trip') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.inquiry.fields.trip_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection
