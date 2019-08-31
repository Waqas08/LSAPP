@extends('layouts.app')

@section('content')
    <h1>Create Posts</h1>

    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{ Form::label('title','Title') }}
            {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter title here']) }}
        </div>
        <div class="form-group">
            {{ Form::label('body','Body') }}
            {{ Form::textarea('body', null, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Enter title here']) }}
        </div>
        <div class="form-group">
            {{ Form::submit('submit', ['class' => 'btn btn-primary']) }}
        </div>
    {!! Form::close() !!}

@endsection