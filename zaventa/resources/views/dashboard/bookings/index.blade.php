<!-- Dashboard: Bookings List -->
@extends('layouts.app')
@section('content')
<div class="container">
    <h2>All Bookings</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>Service</th>
                <th>Customer</th>
                <th>Phone</th>
                <th>Date</th>
                <th>Time</th>
                <th>Status</th>
                <th>Update Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
                <tr>
                    <td>{{ $booking->service->service_name }}</td>
                    <td>{{ $booking->customer_name }}</td>
                    <td>{{ $booking->customer_phone }}</td>
                    <td>{{ $booking->booking_date }}</td>
                    <td>{{ $booking->booking_time }}</td>
                    <td>{{ ucfirst($booking->status) }}</td>
                    <td>
                        <form method="POST" action="{{ route('dashboard.bookings.updateStatus', $booking) }}">
                            @csrf
                            @method('PUT')
                            <select name="status">
                                <option value="pending" @if($booking->status=='pending') selected @endif>Pending</option>
                                <option value="confirmed" @if($booking->status=='confirmed') selected @endif>Confirmed</option>
                                <option value="completed" @if($booking->status=='completed') selected @endif>Completed</option>
                                <option value="cancelled" @if($booking->status=='cancelled') selected @endif>Cancelled</option>
                            </select>
                            <button type="submit">Update</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
