@extends('layouts.app')


@section('content')
    <h1>Customer Information Form</h1>

    <form method="POST" action="{{ route('customers.store') }}">
        @csrf

        <div class="mb-3">
            <label for="full_name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="full_name" name="full_name" placeholder="John Doe" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
        </div>

        <div class="mb-3">
            <label for="contact" class="form-label">Contact</label>
            <input type="number" class="form-control" id="contact" name="contact"  required>
        </div>
        

        <button class="btn btn-primary" type="submit">Submit Form</button>
    </form>
@endsection
