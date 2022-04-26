@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    {{ $user->username }}<br>
                    {{ $user->profile->title }}<br>
                    {{ $user->profile->des }}<br>
                    {{ $user->profile->url }}

                    <div class="row pt-5">
                        <p>{{ $user->posts->count() }} posts</p>
                    </div>

                    <div class="row pt-5">
                        @foreach($user->posts as $post)
                            <div class="col-4">
                                <p><b>{{ $post->caption }}</b></p>
                                <a href="/p/{{ $post->id }}"><img src="/storage/{{ $post->image }}" alt="" class="w-100"></a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
