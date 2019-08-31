@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-secondary">Go Back</a>
    <hr>
    <h1>{{ $post->title }}</h1>
    <div>
        {!! $post->body !!}
    </div>
    <hr>
    <small>Written on {{ $post->created_at }}</small>
    <hr>
    <a href="/posts/{{ $post->id }}/edit" class="btn btn-secondary">Edit</a>
@endsection