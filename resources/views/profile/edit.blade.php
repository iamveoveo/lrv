@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="/profile/{{  $user->id }}">
        @csrf
        @method('PATCH')

        <div class="row mb-3">
            <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('title') }}</label>

            <div class="col-md-6">
                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title }}" autofocus>

                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="des" class="col-md-4 col-form-label text-md-end">{{ __('des') }}</label>

            <div class="col-md-6">
                <input value="{{ $user->profile->des }}" id="des" type="text" class="form-control @error('des') is-invalid @enderror" name="des" value="{{ old('des') }}" autocomplete="des" autofocus>

                @error('des')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="url" class="col-md-4 col-form-label text-md-end">{{ __('url') }}</label>

            <div class="col-md-6">
                <input value="{{ $user->profile->url }}" id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') }}" autocomplete="url" autofocus>

                @error('url')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3 w-25 m-auto">
            <button class="btn btn-success">edit</button>
        </div>

    </form>
</div>
@endsection