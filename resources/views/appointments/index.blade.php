@extends('layouts.app')

@section('content')
    <h1>Appointments</h1>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Customer</th>
                    <th scope="col">Service Type</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
              
            @foreach ($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->customer->name }}</td>
                    <td>{{ $appointment->service->type }}</td>
                    <td>{{ $appointment->date }}</td>
                    <td>{{ $appointment->time }}</td>
                    <td>
                        <a href="{{ route('appointments.show', $appointment->id) }}">View</a>
                        <a href="{{ route('appointments.edit', $appointment->id) }}">Edit</a>
                        <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('appointments.create') }}" class="btn btn-success">Add Appointment</a>

@endsection
