@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Employee List</h1>

        @if ($employees !== null && count($employees) > 0)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        <tr>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->address }}</td>
                            <td>{{ $employee->contact }}</td>
                            <td>
                                <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-info">View</a>
                                <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No employees found.</p>
        @endif

        <a href="{{ route('employees.create') }}" class="btn btn-success">Create Employee</a>
    </div>
@endsection
