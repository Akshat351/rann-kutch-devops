@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('cruds.trip.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.trips.update', [$trip->id]) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label class="required" for="name">{{ trans('cruds.trip.fields.name') }}</label>
                    <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name"
                        id="name" value="{{ old('name', $trip->name) }}" required>
                    @if ($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.trip.fields.name_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="slug">{{ trans('cruds.trip.fields.slug') }}</label>
                    <input class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" name="slug"
                        id="slug" value="{{ old('slug', $trip->slug) }}" required>
                    @if ($errors->has('slug'))
                        <div class="invalid-feedback">
                            {{ $errors->first('slug') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.trip.fields.slug_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="image">{{ trans('cruds.trip.fields.image') }}</label>
                    <div class="needsclick dropzone {{ $errors->has('image') ? 'is-invalid' : '' }}" id="image-dropzone">
                    </div>
                    @if ($errors->has('image'))
                        <div class="invalid-feedback">
                            {{ $errors->first('image') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.trip.fields.image_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required">{{ trans('cruds.trip.fields.trip_type') }}</label>
                    <select class="form-control {{ $errors->has('trip_type') ? 'is-invalid' : '' }}" name="trip_type"
                        id="trip_type" required>
                        <option value disabled {{ old('trip_type', null) === null ? 'selected' : '' }}>
                            {{ trans('global.pleaseSelect') }}</option>
                        @foreach (App\Models\Trip::TRIP_TYPE_SELECT as $key => $label)
                            <option value="{{ $key }}"
                                {{ old('trip_type', $trip->trip_type) === (string) $key ? 'selected' : '' }}>
                                {{ $label }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('trip_type'))
                        <div class="invalid-feedback">
                            {{ $errors->first('trip_type') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.trip.fields.trip_type_helper') }}</span>
                </div>
                {{-- <div class="form-group">
                    <label class="form-label d-block mb-2" for="is_airport">
                        {{ trans('cruds.trip.fields.is_airport') ?? 'Is Airport Trip' }}
                    </label>

                    <div class="form-check form-switch">

                        <input type="hidden" name="is_airport" value="0">

                        <input class="form-check-input {{ $errors->has('is_airport') ? 'is-invalid' : '' }}"
                            type="checkbox" id="is_airport" name="is_airport" value="1"
                            {{ old('is_airport', $trip->is_airport ?? 0) == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_airport">
                            {{ old('is_airport', $trip->is_airport ?? 0) == 1 ? 'Selected for Airport Trip' : 'Not Selected' }}
                        </label>

                        @if ($errors->has('is_airport'))
                            <div class="invalid-feedback">
                                {{ $errors->first('is_airport') }}
                            </div>
                        @endif
                    </div>

                    <small class="form-text text-muted">
                        {{ trans('cruds.trip.fields.is_airport_helper') ?? 'Enable this if this trip is related to an airport route.' }}
                    </small>
                </div> --}}
                 <div class="form-group">
                    <label for="distance">{{ trans('cruds.trip.fields.distance') }}</label>
                    <input class="form-control {{ $errors->has('distance') ? 'is-invalid' : '' }}" type="number"
                        name="distance" id="distance" value="{{ old('distance', $trip->distance) }}" step="1">
                    @if ($errors->has('distance'))
                        <div class="invalid-feedback">
                            {{ $errors->first('distance') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.trip.fields.distance_helper') }}</span>
                </div>

                <div class="form-group">
                    <label for="mini">{{ trans('cruds.trip.fields.mini') }}</label>
                    <input class="form-control {{ $errors->has('mini') ? 'is-invalid' : '' }}" type="number"
                        name="mini" id="mini" value="{{ old('mini', $trip->mini) }}" step="0.01">
                    @if ($errors->has('mini'))
                        <div class="invalid-feedback">
                            {{ $errors->first('mini') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.trip.fields.mini_helper') }}</span>
                </div>

                <div class="form-group">
                    <label for="sedan">{{ trans('cruds.trip.fields.sedan') }}</label>
                    <input class="form-control {{ $errors->has('sedan') ? 'is-invalid' : '' }}" type="number"
                        name="sedan" id="sedan" value="{{ old('sedan', $trip->sedan) }}" step="0.01">
                    @if ($errors->has('sedan'))
                        <div class="invalid-feedback">
                            {{ $errors->first('sedan') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.trip.fields.sedan_helper') }}</span>
                </div>

                <div class="form-group">
                    <label for="ertiga">{{ trans('cruds.trip.fields.ertiga') }}</label>
                    <input class="form-control {{ $errors->has('ertiga') ? 'is-invalid' : '' }}" type="number" name="ertiga"
                        id="ertiga" value="{{ old('ertiga', $trip->ertiga) }}" step="0.01">
                    @if ($errors->has('ertiga'))
                        <div class="invalid-feedback">
                            {{ $errors->first('ertiga') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.trip.fields.ertiga_helper') }}</span>
                </div>

                <div class="form-group">
                    <label for="innova">{{ trans('cruds.trip.fields.innova') }}</label>
                    <input class="form-control {{ $errors->has('innova') ? 'is-invalid' : '' }}" type="number"
                        name="innova" id="innova" value="{{ old('innova', $trip->innova) }}" step="0.01">
                    @if ($errors->has('innova'))
                        <div class="invalid-feedback">
                            {{ $errors->first('innova') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.trip.fields.innova_helper') }}</span>
                </div>

                <div class="form-group">
                    <label for="sort_description">{{ trans('cruds.trip.fields.sort_description') }}</label>
                    <textarea class="form-control {{ $errors->has('sort_description') ? 'is-invalid' : '' }}" name="sort_description"
                        id="sort_description">{{ old('sort_description', $trip->sort_description) }}</textarea>
                    @if ($errors->has('sort_description'))
                        <div class="invalid-feedback">
                            {{ $errors->first('sort_description') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.trip.fields.sort_description_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="schema">{{ trans('cruds.trip.fields.schema') }}</label>
                    <textarea class="form-control {{ $errors->has('schema') ? 'is-invalid' : '' }}" name="schema"
                        id="schema">{{ old('schema', $trip->schema) }}</textarea>
                    @if ($errors->has('schema'))
                        <div class="invalid-feedback">
                            {{ $errors->first('schema') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.trip.fields.schema_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="description">{{ trans('cruds.trip.fields.description') }}</label>
                    <textarea class="form-control ckeditor {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description"
                        id="description">{!! old('description', $trip->description) !!}</textarea>
                    @if ($errors->has('description'))
                        <div class="invalid-feedback">
                            {{ $errors->first('description') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.trip.fields.description_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="meta_title">{{ trans('cruds.trip.fields.meta_title') }}</label>
                    <input class="form-control {{ $errors->has('meta_title') ? 'is-invalid' : '' }}" type="text"
                        name="meta_title" id="meta_title" value="{{ old('meta_title', $trip->meta_title) }}">
                    @if ($errors->has('meta_title'))
                        <div class="invalid-feedback">
                            {{ $errors->first('meta_title') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.trip.fields.meta_title_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="meta_description">{{ trans('cruds.trip.fields.meta_description') }}</label>
                    <input class="form-control {{ $errors->has('meta_description') ? 'is-invalid' : '' }}" type="text"
                        name="meta_description" id="meta_description"
                        value="{{ old('meta_description', $trip->meta_description) }}">
                    @if ($errors->has('meta_description'))
                        <div class="invalid-feedback">
                            {{ $errors->first('meta_description') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.trip.fields.meta_description_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="source_id">{{ trans('cruds.trip.fields.source') }}</label>
                    <select class="form-control select2 {{ $errors->has('source') ? 'is-invalid' : '' }}"
                        name="source_id" id="source_id">
                        @foreach ($sources as $id => $entry)
                            <option value="{{ $id }}"
                                {{ (old('source_id') ? old('source_id') : $trip->source->id ?? '') == $id ? 'selected' : '' }}>
                                {{ $entry }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('source'))
                        <div class="invalid-feedback">
                            {{ $errors->first('source') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.trip.fields.source_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="destination_id">{{ trans('cruds.trip.fields.destination') }}</label>
                    <select class="form-control select2 {{ $errors->has('destination') ? 'is-invalid' : '' }}"
                        name="destination_id" id="destination_id">
                        @foreach ($destinations as $id => $entry)
                            <option value="{{ $id }}"
                                {{ (old('destination_id') ? old('destination_id') : $trip->destination->id ?? '') == $id ? 'selected' : '' }}>
                                {{ $entry }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('destination'))
                        <div class="invalid-feedback">
                            {{ $errors->first('destination') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.trip.fields.destination_helper') }}</span>
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
            url: '{{ route('admin.trips.storeMedia') }}',
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
                @if (isset($trip) && $trip->image)
                    var file = {!! json_encode($trip->image) !!}
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
                                            '{{ route('admin.trips.storeCKEditorImages') }}',
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
                                        data.append('crud_id', '{{ $trip->id ?? 0 }}');
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
