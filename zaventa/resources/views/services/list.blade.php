<!-- Services List Page -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-md-12">
            <h2 class="mb-3">
                <i class="fas fa-list"></i> Available Services
            </h2>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="row g-4">
        @forelse($services as $service)
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $service->service_name }}</h5>
                        <p class="card-text text-muted small">
                            <i class="fas fa-building"></i> {{ $service->business->business_name }}
                        </p>
                        <div class="mb-3">
                            <p class="mb-1">
                                <strong>Price:</strong> ${{ number_format($service->price, 2) }}
                            </p>
                            <p class="mb-0">
                                <strong>Duration:</strong> {{ $service->duration_minutes }} minutes
                            </p>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-top">
                        <a href="{{ route('booking.create', $service) }}" class="btn btn-primary btn-sm w-100">
                            <i class="fas fa-calendar-plus"></i> Book Now
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info text-center">
                    <i class="fas fa-info-circle"></i>
                    No services available at the moment. Please check back later!
                </div>
            </div>
        @endforelse
    </div>
</div>
@endsection
