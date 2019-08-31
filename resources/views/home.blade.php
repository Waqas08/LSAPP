@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <hr>
                    <h3 class="mb-3">Your Blog Posts</h3>
                    @if (count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>       
                        @foreach ($posts as $item)
                            <tr>
                                <th><a href="/posts/{{ $item->id }}">{{ $item->title }}</a></th>
                                <th><a href="/posts/{{ $item->id }}/edit" class="btn btn-primary">Edit</a></th>
                                <th>
                                    {!! Form::open(['action' => ['PostsController@destroy', $item->id], 'method' => 'POST' ]) !!}
                                    {{ method_field('DELETE') }}
                                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                    {!! Form::close() !!}
                                </th>
                            </tr>   
                        @endforeach
                    </table>                        
                    @else
                        <h4>You have no posts</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
