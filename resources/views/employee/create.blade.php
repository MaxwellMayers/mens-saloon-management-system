@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Employee</h1>

        <form method="POST" action="{{ route('employees.store') }}">
            @csrf

            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label for="email">Address:</label>
                <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}">
            </div>

            <div class="form-group">
                <label for="phone">Contact:</label>
                <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}">
            </div>


            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
