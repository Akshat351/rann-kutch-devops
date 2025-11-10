@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.create') }} {{ trans('cruds.localCab.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.local-cabs.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="required" for="name">{{ trans('cruds.localCab.fields.name') }}</label>
                    <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name"
                        id="name" value="{{ old('name', '') }}" required>
                    @if ($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.localCab.fields.name_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="slug">{{ trans('cruds.localCab.fields.slug') }}</label>
                    <input class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" name="slug"
                        id="slug" value="{{ old('slug', '') }}" required>
                    @if ($errors->has('slug'))
                        <div class="invalid-feedback">
                            {{ $errors->first('slug') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.localCab.fields.slug_helper') }}</span>
                </div>

                {{-- CAB RATE SECTIONS --}}
<h4 class="mt-4 mb-2">{{ __('Mini Rates') }}</h4>
<div class="row">
    <div class="col-md-4">
        <label>{{ trans('cruds.localCab.fields.mini_eight_hr_eighty_km') }}</label>
        <input class="form-control" type="number" step="0.01" name="mini_eight_hr_eighty_km"
            value="{{ old('mini_eight_hr_eighty_km') }}">
        <span class="help-block">{{ trans('cruds.localCab.fields.mini_eight_hr_eighty_km_helper') }}</span>
    </div>
    <div class="col-md-4">
        <label>{{ trans('cruds.localCab.fields.mini_ten_hr_hundred_km') }}</label>
        <input class="form-control" type="number" step="0.01" name="mini_ten_hr_hundred_km"
            value="{{ old('mini_ten_hr_hundred_km') }}">
        <span class="help-block">{{ trans('cruds.localCab.fields.mini_ten_hr_hundred_km_helper') }}</span>
    </div>
    <div class="col-md-4">
        <label>{{ trans('cruds.localCab.fields.mini_twelve_hr_hundred_twenty_km') }}</label>
        <input class="form-control" type="number" step="0.01" name="mini_twelve_hr_hundred_twenty_km"
            value="{{ old('mini_twelve_hr_hundred_twenty_km') }}">
        <span class="help-block">{{ trans('cruds.localCab.fields.mini_twelve_hr_hundred_twenty_km_helper') }}</span>
    </div>
</div>

<h4 class="mt-4 mb-2">{{ __('Sedan Rates') }}</h4>
<div class="row">
    <div class="col-md-4">
        <label>{{ trans('cruds.localCab.fields.sedan_eight_hr_eighty_km') }}</label>
        <input class="form-control" type="number" step="0.01" name="sedan_eight_hr_eighty_km"
            value="{{ old('sedan_eight_hr_eighty_km') }}">
        <span class="help-block">{{ trans('cruds.localCab.fields.sedan_eight_hr_eighty_km_helper') }}</span>
    </div>
    <div class="col-md-4">
        <label>{{ trans('cruds.localCab.fields.sedan_ten_hr_hundred_km') }}</label>
        <input class="form-control" type="number" step="0.01" name="sedan_ten_hr_hundred_km"
            value="{{ old('sedan_ten_hr_hundred_km') }}">
        <span class="help-block">{{ trans('cruds.localCab.fields.sedan_ten_hr_hundred_km_helper') }}</span>
    </div>
    <div class="col-md-4">
        <label>{{ trans('cruds.localCab.fields.sedan_twelve_hr_hundred_twenty_km') }}</label>
        <input class="form-control" type="number" step="0.01" name="sedan_twelve_hr_hundred_twenty_km"
            value="{{ old('sedan_twelve_hr_hundred_twenty_km') }}">
        <span class="help-block">{{ trans('cruds.localCab.fields.sedan_twelve_hr_hundred_twenty_km_helper') }}</span>
    </div>
</div>

<h4 class="mt-4 mb-2">{{ __('Ertiga Rates') }}</h4>
<div class="row">
    <div class="col-md-4">
        <label>{{ trans('cruds.localCab.fields.ertiga_eight_hr_eighty_km') }}</label>
        <input class="form-control" type="number" step="0.01" name="ertiga_eight_hr_eighty_km"
            value="{{ old('ertiga_eight_hr_eighty_km') }}">
        <span class="help-block">{{ trans('cruds.localCab.fields.ertiga_eight_hr_eighty_km_helper') }}</span>
    </div>
    <div class="col-md-4">
        <label>{{ trans('cruds.localCab.fields.ertiga_ten_hr_hundred_km') }}</label>
        <input class="form-control" type="number" step="0.01" name="ertiga_ten_hr_hundred_km"
            value="{{ old('ertiga_ten_hr_hundred_km') }}">
        <span class="help-block">{{ trans('cruds.localCab.fields.ertiga_ten_hr_hundred_km_helper') }}</span>
    </div>
    <div class="col-md-4">
        <label>{{ trans('cruds.localCab.fields.ertiga_twelve_hr_hundred_twenty_km') }}</label>
        <input class="form-control" type="number" step="0.01" name="ertiga_twelve_hr_hundred_twenty_km"
            value="{{ old('ertiga_twelve_hr_hundred_twenty_km') }}">
        <span class="help-block">{{ trans('cruds.localCab.fields.ertiga_twelve_hr_hundred_twenty_km_helper') }}</span>
    </div>
</div>


                <div class="form-group">
                    <label for="sort_description">{{ trans('cruds.localCab.fields.sort_description') }}</label>
                    <textarea class="form-control {{ $errors->has('sort_description') ? 'is-invalid' : '' }}" name="sort_description"
                        id="sort_description">{{ old('sort_description') }}</textarea>
                    @if ($errors->has('sort_description'))
                        <div class="invalid-feedback">
                            {{ $errors->first('sort_description') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.localCab.fields.sort_description_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="description">{{ trans('cruds.localCab.fields.description') }}</label>
                    <textarea class="form-control ckeditor {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description"
                        id="description">{!! old('description') !!}</textarea>
                    @if ($errors->has('description'))
                        <div class="invalid-feedback">
                            {{ $errors->first('description') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.localCab.fields.description_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="meta_title">{{ trans('cruds.localCab.fields.meta_title') }}</label>
                    <input class="form-control {{ $errors->has('meta_title') ? 'is-invalid' : '' }}" type="text"
                        name="meta_title" id="meta_title" value="{{ old('meta_title', '') }}">
                    @if ($errors->has('meta_title'))
                        <div class="invalid-feedback">
                            {{ $errors->first('meta_title') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.localCab.fields.meta_title_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="meta_description">{{ trans('cruds.localCab.fields.meta_description') }}</label>
                    <textarea class="form-control {{ $errors->has('meta_description') ? 'is-invalid' : '' }}" name="meta_description"
                        id="meta_description">{{ old('meta_description') }}</textarea>
                    @if ($errors->has('meta_description'))
                        <div class="invalid-feedback">
                            {{ $errors->first('meta_description') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.localCab.fields.meta_description_helper') }}</span>
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

@section('scripts')
    <script>
        Dropzone.options.imageDropzone = {
            url: '{{ route('admin.local-cabs.storeMedia') }}',
            maxFilesize: 2, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 2,
                width: 4096,
                height: 4096
            },
            success: function(file, response) {
                $('form').find('input[name="image"]').remove()
                $('form').append('<input type="hidden" name="image" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="image"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($localCab) && $localCab->image)
                    var file = {!! json_encode($localCab->image) !!}
                    this.options.addedfile.call(this, file)
                    this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="image" value="' + file.file_name + '">')
                    this.options.maxFiles = this.options.maxFiles - 1
                @endif
            },
            error: function(file, response) {
                if ($.type(response) === 'string') {
                    var message = response //dropzone sends it's own error messages in string
                } else {
                    var message = response.errors.file
                }
                file.previewElement.classList.add('dz-error')
                _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                _results = []
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            function SimpleUploadAdapter(editor) {
                editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
                    return {
                        upload: function() {
                            return loader.file
                                .then(function(file) {
                                    return new Promise(function(resolve, reject) {
                                        // Init request
                                        var xhr = new XMLHttpRequest();
                                        xhr.open('POST',
                                            '{{ route('admin.local-cabs.storeCKEditorImages') }}',
                                            true);
                                        xhr.setRequestHeader('x-csrf-token', window._token);
                                        xhr.setRequestHeader('Accept', 'application/json');
                                        xhr.responseType = 'json';

                                        // Init listeners
                                        var genericErrorText =
                                            `Couldn't upload file: ${ file.name }.`;
                                        xhr.addEventListener('error', function() {
                                            reject(genericErrorText)
                                        });
                                        xhr.addEventListener('abort', function() {
                                            reject()
                                        });
                                        xhr.addEventListener('load', function() {
                                            var response = xhr.response;

                                            if (!response || xhr.status !== 201) {
                                                return reject(response && response
                                                    .message ?
                                                    `${genericErrorText}\n${xhr.status} ${response.message}` :
                                                    `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`
                                                    );
                                            }

                                            $('form').append(
                                                '<input type="hidden" name="ck-media[]" value="' +
                                                response.id + '">');

                                            resolve({
                                                default: response.url
                                            });
                                        });

                                        if (xhr.upload) {
                                            xhr.upload.addEventListener('progress', function(
                                            e) {
                                                if (e.lengthComputable) {
                                                    loader.uploadTotal = e.total;
                                                    loader.uploaded = e.loaded;
                                                }
                                            });
                                        }

                                        // Send request
                                        var data = new FormData();
                                        data.append('upload', file);
                                        data.append('crud_id', '{{ $localCab->id ?? 0 }}');
                                        xhr.send(data);
                                    });
                                })
                        }
                    };
                }
            }

            var allEditors = document.querySelectorAll('.ckeditor');
            for (var i = 0; i < allEditors.length; ++i) {
                ClassicEditor.create(
                    allEditors[i], {
                        extraPlugins: [SimpleUploadAdapter]
                    }
                );
            }
        });
    </script>
@endsection
