<!-- resources/views/join.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Join Us</h2>
    <p>Please fill in your details below:</p>
    <form action="/join" method="POST" class="mt-3">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
        </div>
        <button type="submit" class="btn btn-danger">Join us now</button>
    </form>
</div>
@endsection

