<!-- Dashboard Home -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-md-12">
            <h2 class="mb-3">Welcome, {{ Auth::user()->name }}</h2>
            @if($business)
                <div class="alert alert-info">
                    <strong>Business:</strong> {{ $business->business_name }}
                </div>
                <div class="btn-group" role="group">
                    <a href="{{ route('dashboard.services') }}" class="btn btn-primary">
                        <i class="fas fa-cogs"></i> Manage Services
                    </a>
                    <a href="{{ route('dashboard.bookings') }}" class="btn btn-primary">
                        <i class="fas fa-calendar"></i> View Bookings
                    </a>
                </div>
            @else
                <div class="alert alert-warning">
                    <p class="mb-0">You have not registered a business yet. <a href="{{ route('dashboard.services') }}">Create one now</a>.</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
