@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.priceperkm.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.priceperkm.update", [$priceperkm->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            {{-- <div class="form-group">
                <label class="required" for="nammini_price_per_kme">{{ trans('cruds.priceperkm.fields.mini_price_per_km') }}</label>
                <input class="form-control {{ $errors->has('mini_price_per_km') ? 'is-invalid' : '' }}" type="text" name="mini_price_per_km" id="mini_price_per_km" value="{{ old('mini_price_per_km', $priceperkm->mini_price_per_km) }}" >
                @if($errors->has('mini_price_per_km'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mini_price_per_km') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.priceperkm.fields.mini_price_per_km_helper') }}</span>
            </div> --}}
            <div class="form-group">
                <label class="required" for="sedan_price_per_km">{{ trans('cruds.priceperkm.fields.sedan_price_per_km') }}</label>
                <input class="form-control {{ $errors->has('sedan_price_per_km') ? 'is-invalid' : '' }}" type="text" name="sedan_price_per_km" id="sedan_price_per_km" value="{{ old('sedan_price_per_km', $priceperkm->sedan_price_per_km) }}" >
                @if($errors->has('sedan_price_per_km'))
                    <div class="invalid-feedback">
                        {{ $errors->first('sedan_price_per_km') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.priceperkm.fields.sedan_price_per_km_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="suv_price_per_km">{{ trans('cruds.priceperkm.fields.suv_price_per_km') }}</label>
                <input class="form-control {{ $errors->has('suv_price_per_km') ? 'is-invalid' : '' }}" type="text" name="suv_price_per_km" id="suv_price_per_km" value="{{ old('suv_price_per_km', $priceperkm->suv_price_per_km) }}" >
                @if($errors->has('suv_price_per_km'))
                    <div class="invalid-feedback">
                        {{ $errors->first('suv_price_per_km') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.priceperkm.fields.suv_price_per_km_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="innova_price_per_km">{{ trans('cruds.priceperkm.fields.innova_price_per_km') }}</label>
                <input class="form-control {{ $errors->has('innova_price_per_km') ? 'is-invalid' : '' }}" type="text" name="innova_price_per_km" id="innova_price_per_km" value="{{ old('innova_price_per_km', $priceperkm->innova_price_per_km) }}" >
                @if($errors->has('innova_price_per_km'))
                    <div class="invalid-feedback">
                        {{ $errors->first('innova_price_per_km') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.priceperkm.fields.innova_price_per_km_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="driver_allowance_per_day">{{ trans('cruds.priceperkm.fields.driver_allowance_per_day') }}</label>
                <input class="form-control {{ $errors->has('driver_allowance_per_day') ? 'is-invalid' : '' }}" type="text" name="driver_allowance_per_day" id="driver_allowance_per_day" value="{{ old('driver_allowance_per_day', $priceperkm->driver_allowance_per_day) }}" >
                @if($errors->has('driver_allowance_per_day'))
                    <div class="invalid-feedback">
                        {{ $errors->first('driver_allowance_per_day') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.priceperkm.fields.driver_allowance_per_day_helper') }}</span>
            </div>
            {{-- <div class="form-group">
                <label for="mini_km_per_day">{{ trans('cruds.priceperkm.fields.mini_km_per_day') }}</label>
                <input class="form-control {{ $errors->has('mini_km_per_day') ? 'is-invalid' : '' }}" type="text" name="mini_km_per_day" id="mini_km_per_day" value="{{ old('mini_km_per_day', $priceperkm->mini_km_per_day) }}" >
                @if($errors->has('mini_km_per_day'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mini_km_per_day') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.priceperkm.fields.mini_km_per_day_helper') }}</span>
            </div> --}}
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

