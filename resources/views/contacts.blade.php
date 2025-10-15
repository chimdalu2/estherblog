@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<h2>Contact Me</h2>

<form method="POST" action="/contacts">
    @csrf
    <div class="mb-3">
        <label>Name:</label>
        <input type="text" name="name" class="form-control" placeholder="Enter your name">
    </div>

    <div class="mb-3">
        <label>Email:</label>
        <input type="email" name="email" class="form-control" placeholder="Enter your email">
    </div>

    <div class="mb-3">
        <label>Message:</label>
        <textarea name="message" class="form-control" placeholder="Enter your message"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Send Message</button>
</form>
@endsection
