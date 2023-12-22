@extends('layouts\app')

@section('content')
    <div class="jumbotron">
        <h1>Welcome to Our Barbershop</h1>
        <p>Book an appointment with our talented barbers today.</p>
        <a href="{{ route('employees.index') }}" class="btn btn-primary">View Barbers</a>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h2>About Us</h2>
            <p>Welcome to Godzilla's Babering Saloon, where we redefine the art of grooming and provide you with an exceptional barbershop experience.</p>
        </div>
        <div class="col-md-6">
            <h2>Contact Us</h2>
            <p>If you have any questions or need assistance, please feel free to contact us.</p>
            {{-- <a href="{{ route('contact') }}" class="btn btn-secondary">Contact Us</a> --}}
        </div>
    </div>
@endsection
