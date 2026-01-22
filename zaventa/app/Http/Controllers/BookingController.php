<?php
namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    // Public: show booking form
    public function create(Service $service)
    {
        return view('booking.create', compact('service'));
    }

    // Public: store booking
    public function store(Request $request, Service $service)
    {
        $request->validate([
            'customer_name' => 'required',
            'customer_phone' => 'required',
            'booking_date' => 'required|date',
            'booking_time' => 'required',
        ]);
        $service->bookings()->create([
            'customer_name' => $request->customer_name,
            'customer_phone' => $request->customer_phone,
            'booking_date' => $request->booking_date,
            'booking_time' => $request->booking_time,
            'status' => 'pending',
        ]);
        return redirect()->route('services.list')->with('success', 'Booking submitted!');
    }

    // Dashboard: list bookings for business
    public function index()
    {
        $business = Auth::user()->business;
        $bookings = $business ? Booking::whereIn('service_id', $business->services->pluck('id'))->with('service')->get() : collect();
        return view('dashboard.bookings.index', compact('bookings'));
    }

    // Dashboard: update booking status
    public function updateStatus(Request $request, Booking $booking)
    {
        $request->validate([
            'status' => 'required|in:pending,confirmed,completed,cancelled',
        ]);
        $booking->status = $request->status;
        $booking->save();
        return redirect()->route('dashboard.bookings')->with('success', 'Booking status updated.');
    }
}
