@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ '/p' }}" enctype="multipart/form-data">
        @csrf

        <div class="row mb-3">
            <label for="caption" class="col-md-4 col-form-label text-md-end">{{ __('image caption') }}</label>

            <div class="col-md-6">
                <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" autofocus>

                @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('image') }}</label>

            <div class="col-md-6">
                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" autocomplete="image" autofocus>

                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3 w-25 m-auto">
            <button class="btn btn-success">Add</button>
        </div>

    </form>
</div>
@endsection