@extends('layout.master')

@section('content')
    <div class="container">
        <h1>Customer List</h1>

        @if (count($customers) > 0)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td>
                                <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-info">View</a>
                                <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-primary">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No customers found.</p>
        @endif

        <a href="{{ route('customers.create') }}" class="btn btn-success">Create Customer</a>
    </div>
@endsection
