@extends('layouts.app')

@section('content')
    <h1>Create Posts</h1>

    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'PUST']) !!}
    {{ method_field('PUT') }}
        <div class="form-group">
            {{ Form::label('title','Title') }}
            {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Enter title here']) }}
        </div>
        <div class="form-group">
            {{ Form::label('body','Body') }}
            {{ Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Enter title here']) }}
        </div>
        <div class="form-group">
            {{ Form::submit('submit', ['class' => 'btn btn-primary']) }}
        </div>
    {!! Form::close() !!}

@endsection