@extends('layouts.app')

@section('content')
    <h1>Services</h1>
    <table class="table">
            <thead>
              <tr>
                <th scope="col">Type</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
              </tr>
            </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <td>{{ $service->type }}</td>
                    <td>{{ $service->description }}</td>
                    <td>${{ $service->price }}</td>
                    <td>
                        <a href="{{ route('services.show', $service->id) }}">View</a>
                        <a href="{{ route('services.edit', $service->id) }}">Edit</a>
                        <form action="{{ route('services.destroy', $service->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('services.create') }}" class="btn btn-success">Add Service</a>
@endsection
