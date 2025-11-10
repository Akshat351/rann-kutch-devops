@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.carRental.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.car-rentals.update", [$carRental->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
           <div class="form-group">
    <label class="required" for="name">{{ trans('cruds.carRental.fields.name') }}</label>
    <select class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" id="name" required>
        <option value="" disabled {{ old('name', $carRental->name) ? '' : 'selected' }}>-- Select Car Type --</option>
   {{--      <option value="Mini" {{ old('name', $carRental->name) == 'Mini' ? 'selected' : '' }}>Mini</option> --}}
        <option value="Sedan" {{ old('name', $carRental->name) == 'Sedan' ? 'selected' : '' }}>Sedan</option>
        <option value="SUV" {{ old('name', $carRental->name) == 'SUV' ? 'selected' : '' }}>SUV</option>
        <option value="Innova" {{ old('name', $carRental->name) == 'Innova' ? 'selected' : '' }}>Innova</option>
    </select>
    @if($errors->has('name'))
        <div class="invalid-feedback">
            {{ $errors->first('name') }}
        </div>
    @endif
    <span class="help-block">{{ trans('cruds.carRental.fields.name_helper') }}</span>
</div>

            <div class="form-group">
                <label class="required" for="slug">{{ trans('cruds.carRental.fields.slug') }}</label>
                <input class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" name="slug" id="slug" value="{{ old('slug', $carRental->slug) }}" required>
                @if($errors->has('slug'))
                    <div class="invalid-feedback">
                        {{ $errors->first('slug') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.carRental.fields.slug_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="image">{{ trans('cruds.carRental.fields.image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('image') ? 'is-invalid' : '' }}" id="image-dropzone">
                </div>
                @if($errors->has('image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.carRental.fields.image_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="sort_description">{{ trans('cruds.carRental.fields.sort_description') }}</label>
                <textarea class="form-control {{ $errors->has('sort_description') ? 'is-invalid' : '' }}" name="sort_description" id="sort_description">{{ old('sort_description', $carRental->sort_description) }}</textarea>
                @if($errors->has('sort_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('sort_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.carRental.fields.sort_description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.carRental.fields.description') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{!! old('description', $carRental->description) !!}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.carRental.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="meta_title">{{ trans('cruds.carRental.fields.meta_title') }}</label>
                <input class="form-control {{ $errors->has('meta_title') ? 'is-invalid' : '' }}" type="text" name="meta_title" id="meta_title" value="{{ old('meta_title', $carRental->meta_title) }}">
                @if($errors->has('meta_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('meta_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.carRental.fields.meta_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="meta_description">{{ trans('cruds.carRental.fields.meta_description') }}</label>
                <textarea class="form-control {{ $errors->has('meta_description') ? 'is-invalid' : '' }}" name="meta_description" id="meta_description">{{ old('meta_description', $carRental->meta_description) }}</textarea>
                @if($errors->has('meta_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('meta_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.carRental.fields.meta_description_helper') }}</span>
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
    url: '{{ route('admin.car-rentals.storeMedia') }}',
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
@if(isset($carRental) && $carRental->image)
      var file = {!! json_encode($carRental->image) !!}
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
                xhr.open('POST', '{{ route('admin.car-rentals.storeCKEditorImages') }}', true);
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
                data.append('crud_id', '{{ $carRental->id ?? 0 }}');
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