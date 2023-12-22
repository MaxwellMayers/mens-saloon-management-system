@extends('layouts.app')

@section('content')
    <h1>Edit Service</h1>
    <form method="POST" action="{{ route('services.update', $service->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Type:</label>
            <input type="text" name="name" id="name" value="{{ $service->type }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" rows="4" required>{{ $service->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" value="{{ $service->price }}" step="0.01" required>
        </div>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('services.show', $service->id) }}">Back to Service Details</a>
@endsection
