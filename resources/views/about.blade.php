@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h2>About Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod ultrices ex, vel ullamcorper urna pellentesque id.</p>
                <p>Integer nec augue vel est eleifend fringilla. Quisque ac augue at libero imperdiet semper a non nisl. Duis ut turpis nec nulla accumsan volutpat. Proin et varius nunc, a venenatis est.</p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/about-image.jpg') }}" alt="About Us" class="img-fluid rounded">
            </div>
        </div>
    </div>
Sample Edit
@endsection
