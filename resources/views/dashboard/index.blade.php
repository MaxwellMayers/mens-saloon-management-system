@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Dashboard</h2>
        
        
        <div class="card">
            <div class="card-body">
                <a href="{{ route('appointments.index') }}"class="btn btn-success">Manage Appointments</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <a href="{{ route('services.index') }}" class="btn btn-success">Manage Services</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <a href="{{ route('employees.index') }}" class="btn btn-success">Manage Employees</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <a href="{{ route('customers.index') }}" class="btn btn-success">Manage Customers</a>
            </div>
        </div>
    </div>
@endsection
