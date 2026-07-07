<!-- Dashboard: Create Service -->
@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Add New Service</h2>
    <form method="POST" action="{{ route('dashboard.services.store') }}">
        @csrf
        <div>
            <label>Service Name:</label>
            <input type="text" name="service_name" required value="{{ old('service_name') }}">
        </div>
        <div>
            <label>Price:</label>
            <input type="number" step="0.01" name="price" required value="{{ old('price') }}">
        </div>
        <div>
            <label>Duration (minutes):</label>
            <input type="number" name="duration_minutes" required value="{{ old('duration_minutes') }}">
        </div>
        <button type="submit">Create</button>
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
