@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('cruds.faq.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.faqs.update', [$faq->id]) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label class="required" for="question">{{ trans('cruds.faq.fields.question') }}</label>
                    <textarea class="form-control{{ $errors->has('question') ? 'is-invalid' : '' }}" name="question" id="question"
                        oninput="checkValidInput(this)" rows="1" required>{{ old('question', $faq->question) }}</textarea>
                    @if ($errors->has('question'))
                        <div class="invalid-feedback">
                            {{ $errors->first('question') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.faq.fields.question_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="answer">{{ trans('cruds.faq.fields.answer') }}</label>
                    <textarea class="form-control {{ $errors->has('answer') ? 'is-invalid' : '' }}" name="answer" id="answer"
                        oninput="checkValidInput(this)" rows="1" required>{{ old('answer', $faq->answer) }}</textarea>
                    @if ($errors->has('answer'))
                        <div class="invalid-feedback">
                            {{ $errors->first('answer') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.faq.fields.answer_helper') }}</span>
                </div>

                 <div class="form-group">
                <label class="required" for="trip_ids">{{ trans('cruds.faq.fields.trip_id') }}</label>
                <select class="form-control select2 {{ $errors->has('trip_id') ? 'is-invalid' : '' }}" name="trip_ids"
                    id="trip_ids" required>
                    @foreach($trip_ids as $id => $entry)
                         <option value="{{ $id }}"
            {{ (in_array($id, old('trip_ids', $faq->trips->pluck('id')->toArray())) ? 'selected' : '') }}>
            {{ $entry }}
        </option>


                    @endforeach
                </select>
                @if($errors->has('trip_id'))
                <div class="invalid-feedback">
                    {{ $errors->first('trip_id') }}
                </div>
                @endif
                <span class="help-block">{{ trans('cruds.faq.fields.trip_helper') }}</span>
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
