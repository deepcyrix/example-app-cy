@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h2>Contact Information</h2>
                <p>If you have any questions or inquiries, feel free to contact us:</p>
                <ul class="list-group">
                    <li class="list-group-item">Email: info@example.com</li>
                    <li class="list-group-item">Phone: +1 (123) 456-7890</li>
                    <li class="list-group-item">Address: 123 Main Street, Cityville</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h2>Contact Form</h2>
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Your Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
