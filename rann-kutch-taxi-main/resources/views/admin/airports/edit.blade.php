@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.airport.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.airports.update", [$airport->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.airport.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $airport->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.airport.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="slug">{{ trans('cruds.airport.fields.slug') }}</label>
                <input class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" name="slug" id="slug" value="{{ old('slug', $airport->slug) }}" required>
                @if($errors->has('slug'))
                    <div class="invalid-feedback">
                        {{ $errors->first('slug') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.airport.fields.slug_helper') }}</span>
            </div>
            <div class="form-group">
                <label  class="required" for="source_id">{{ trans('cruds.airport.fields.source') }}</label>
                <select class="form-control select2 {{ $errors->has('source') ? 'is-invalid' : '' }}" name="source_id" id="source_id">
                    @foreach($sources as $id => $entry)
                        <option value="{{ $id }}" {{ (old('source_id') ? old('source_id') : $airport->source->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('source'))
                    <div class="invalid-feedback">
                        {{ $errors->first('source') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.airport.fields.source_helper') }}</span>
            </div>
              <div class="form-group">
    <label for="distance">{{ trans('cruds.airport.fields.distance') }}</label>
    <input class="form-control {{ $errors->has('distance') ? 'is-invalid' : '' }}"
           type="number" step="0.01" name="distance" id="distance"
           value="{{ old('distance', $airport->distance) }}">
    @if($errors->has('distance'))
        <div class="invalid-feedback">
            {{ $errors->first('distance') }}
        </div>
    @endif
    <span class="help-block">{{ trans('cruds.airport.fields.mini_helper') }}</span>
</div>
            <div class="form-group">
    <label   class="required" for="mini">{{ trans('cruds.airport.fields.mini') }}</label>
    <input class="form-control {{ $errors->has('mini') ? 'is-invalid' : '' }}"
           type="number" step="0.01" name="mini" id="mini"
           value="{{ old('mini', $airport->mini) }}">
    @if($errors->has('mini'))
        <div class="invalid-feedback">
            {{ $errors->first('mini') }}
        </div>
    @endif
    <span class="help-block">{{ trans('cruds.airport.fields.mini_helper') }}</span>
</div>

<div class="form-group">
    <label   class="required" for="sedan">{{ trans('cruds.airport.fields.sedan') }}</label>
    <input class="form-control {{ $errors->has('sedan') ? 'is-invalid' : '' }}"
           type="number" step="0.01" name="sedan" id="sedan"
           value="{{ old('sedan', $airport->sedan) }}">
    @if($errors->has('sedan'))
        <div class="invalid-feedback">
            {{ $errors->first('sedan') }}
        </div>
    @endif
    <span class="help-block">{{ trans('cruds.airport.fields.sedan_helper') }}</span>
</div>

<div class="form-group">
    <label   class="required" for="suv">{{ trans('cruds.airport.fields.suv') }}</label>
    <input class="form-control {{ $errors->has('suv') ? 'is-invalid' : '' }}"
           type="number" step="0.01" name="suv" id="suv"
           value="{{ old('suv', $airport->suv) }}">
    @if($errors->has('suv'))
        <div class="invalid-feedback">
            {{ $errors->first('suv') }}
        </div>
    @endif
    <span class="help-block">{{ trans('cruds.airport.fields.suv_helper') }}</span>
</div>

<div class="form-group">
    <label  class="required" for="innova">{{ trans('cruds.airport.fields.innova') }}</label>
    <input class="form-control {{ $errors->has('innova') ? 'is-invalid' : '' }}"
           type="number" step="0.01" name="innova" id="innova"
           value="{{ old('innova', $airport->innova) }}">
    @if($errors->has('innova'))
        <div class="invalid-feedback">
            {{ $errors->first('innova') }}
        </div>
    @endif
    <span class="help-block">{{ trans('cruds.airport.fields.innova_helper') }}</span>
</div>
            <div class="form-group">
                <label for="image">{{ trans('cruds.airport.fields.image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('image') ? 'is-invalid' : '' }}" id="image-dropzone">
                </div>
                @if($errors->has('image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.airport.fields.image_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="sort_description">{{ trans('cruds.airport.fields.sort_description') }}</label>
                <textarea class="form-control {{ $errors->has('sort_description') ? 'is-invalid' : '' }}" name="sort_description" id="sort_description">{{ old('sort_description', $airport->sort_description) }}</textarea>
                @if($errors->has('sort_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('sort_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.airport.fields.sort_description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.airport.fields.description') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{!! old('description', $airport->description) !!}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.airport.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="meta_title">{{ trans('cruds.airport.fields.meta_title') }}</label>
                <input class="form-control {{ $errors->has('meta_title') ? 'is-invalid' : '' }}" type="text" name="meta_title" id="meta_title" value="{{ old('meta_title', $airport->meta_title) }}">
                @if($errors->has('meta_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('meta_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.airport.fields.meta_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="meta_description">{{ trans('cruds.airport.fields.meta_description') }}</label>
                <textarea class="form-control {{ $errors->has('meta_description') ? 'is-invalid' : '' }}" name="meta_description" id="meta_description">{{ old('meta_description', $airport->meta_description) }}</textarea>
                @if($errors->has('meta_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('meta_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.airport.fields.meta_description_helper') }}</span>
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
    url: '{{ route('admin.airports.storeMedia') }}',
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
    success: function (file, response) {
      $('form').find('input[name="image"]').remove()
      $('form').append('<input type="hidden" name="image" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($airport) && $airport->image)
      var file = {!! json_encode($airport->image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="image" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
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
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.airports.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $airport->id ?? 0 }}');
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