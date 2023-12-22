@extends('layouts.app')

@section('content')
    <h1>Create Appointment</h1>
    <form method="POST" action="{{ route('appointments.store') }}">
        @csrf
        
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Customer
            </button>
            @foreach ($customers as $customer)
            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Service
            </button>
            @foreach ($services as $service)
            <option value="{{ $service->id }}">{{ $service->type }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-12">
        <label for="date" class="form-label">Date</label>
        <input type="date" name="date" id="date" required>
      </div>
    <div class="col-12">
        <label for="time" class="form-label">Time</label>
        <input type="time" name="time" id="time" required>
      </div>
    <div class="form-group">
    <button type="submit" class="btn btn-primary">Save</button>



    </form>
    <a href="{{ route('appointments.index') }}">Back to Appointments</a>
@endsection
