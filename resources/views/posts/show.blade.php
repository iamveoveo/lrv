@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img class="w-100" src="/storage/{{ $post->image }}" alt="">
        </div>
        <div class="col-4">
            <h2><b>{{ $post->user->username }}</b></h2>
            <h3>{{ $post->caption }}</h3>
        </div>
    </div>
</div>
@endsection