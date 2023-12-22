@extends('layout.master')

@section('content')
    <h1>Create Service</h1>
    <form method="POST" action="{{ route('services.store') }}">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Service Type</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div>
          <div class="input-group">
            <span class="input-group-text">Description</span>
            <textarea class="form-control" aria-label="With textarea"></textarea>
          </div>
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Price</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
          </div>
          <button type="button" class="btn btn-primary">Save</button>
        </form>
    <a href="{{ route('services.index') }}">Back to Services</a>
@endsection
