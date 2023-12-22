@extends('layouts.app')

@section('content')
    <h1>Edit Appointment</h1>
    <form method="POST" action="{{ route('appointments.update', $appointment->id) }}">
        @csrf
        @method('PUT')
      
        <div class="form-group">
            <label for="customer_id">Customer:</label>
            <select name="customer_id" id="customer_id">
                @foreach ($customers as $customer)
                <option value="{{ $customer->id }}" @if ($appointment->customer_id == $customer->id) selected @endif>{{ $customer->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="service_id">Service:</label>
            <select name="service_id" id="service_id">
                @foreach ($services as $service)
                <option value="{{ $service->id }}" @if ($appointment->service_id == $service->id) selected @endif>{{ $service->type }}</option>
                @endforeach
            </select>
           
            <div class="form-group">
                <label for="time">Time:</label>
                <input type="time" name="time" id="time" value="{{ $appointment->time }}" required>
            </div>
        </div>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('appointments.show', $appointment->id) }}">Back to Appointment Details</a>
@endsection
