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
            <form action="{{ route('post.destroy', ['post' => $post->id]) }}" enctype="multipart/form-data" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <div class="form-group row">
                    <button type="submit" class="btn btn-primary">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


