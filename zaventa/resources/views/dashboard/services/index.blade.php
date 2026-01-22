<!-- Dashboard: Services Management -->
@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Your Services</h2>
    <a href="{{ route('dashboard.services.create') }}">Add New Service</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <ul>
        @foreach($services as $service)
            <li>
                <strong>{{ $service->service_name }}</strong> (${{ $service->price }}, {{ $service->duration_minutes }} min)
                <a href="{{ route('dashboard.services.edit', $service) }}">Edit</a>
                <form action="{{ route('dashboard.services.destroy', $service) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection
