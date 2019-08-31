@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>WELCOME TO LARAVEL</h1>
        <p class="lead">This is the laravel application from the 'Laravel From Scratch' YouTube series</p>
        <a class="btn btn-lg btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
        <a class="btn btn-lg btn-success" href="{{ route('register') }}">{{ __('Register') }}</a>
    </div>
@endsection