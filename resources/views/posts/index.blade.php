@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $item)
            <a href="/posts/{{ $item->id }}">
                <div class="card p-3">
                    <h3>{{ $item->title }}</h3>
                    <small>Written on {{ $item->created_at }}</small>
                </div>
            </a>
        @endforeach
        {{ $posts->links() }}
    @else
        <p>No posts found</p>
    @endif
@endsection