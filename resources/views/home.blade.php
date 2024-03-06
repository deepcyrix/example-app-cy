@extends('layouts.app')

@section('title', 'Home Page')

@push('styles')
    <style>
        .jumbotron {
            background-color: #2b7fd3;
            color: #f7f7f7;
        }
    </style>
@endpush

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Welcome to Your Website!</h1>
        <p class="lead">This is a simple example home page using Bootstrap classes in Laravel.</p>
        <hr class="my-4">
        <p>Explore the website and learn more about us.</p>
        <a class="btn btn-primary btn-lg" href="{{ route('about') }}" role="button">Learn More</a>
    </div>
update blade

@endsection
