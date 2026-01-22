<!-- Dashboard: Edit Service -->
@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Edit Service</h2>
    <form method="POST" action="{{ route('dashboard.services.update', $service) }}">
        @csrf
        @method('PUT')
        <div>
            <label>Service Name:</label>
            <input type="text" name="service_name" required value="{{ old('service_name', $service->service_name) }}">
        </div>
        <div>
            <label>Price:</label>
            <input type="number" step="0.01" name="price" required value="{{ old('price', $service->price) }}">
        </div>
        <div>
            <label>Duration (minutes):</label>
            <input type="number" name="duration_minutes" required value="{{ old('duration_minutes', $service->duration_minutes) }}">
        </div>
        <button type="submit">Update</button>
    </form>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
@endsection
