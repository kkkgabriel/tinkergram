@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <h2>{{$user->name}}</h2>
            <p> {{$post->caption}}</p>
        </div>
    </div>
</div>
@endsection


