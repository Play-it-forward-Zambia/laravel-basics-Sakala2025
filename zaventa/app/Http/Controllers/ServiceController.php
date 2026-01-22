<?php
namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    // Public list of all services
    public function publicList()
    {
        $services = Service::with('business')->get();
        return view('services.list', compact('services'));
    }

    // Dashboard: list services for business
    public function index()
    {
        $business = Auth::user()->business;
        $services = $business ? $business->services : collect();
        return view('dashboard.services.index', compact('services'));
    }

    // Dashboard: show create form
    public function create()
    {
        return view('dashboard.services.create');
    }

    // Dashboard: store new service
    public function store(Request $request)
    {
        $business = Auth::user()->business;
        $request->validate([
            'service_name' => 'required',
            'price' => 'required|numeric',
            'duration_minutes' => 'required|integer',
        ]);
        $business->services()->create($request->only('service_name', 'price', 'duration_minutes'));
        return redirect()->route('dashboard.services')->with('success', 'Service created.');
    }

    // Dashboard: show edit form
    public function edit(Service $service)
    {
        return view('dashboard.services.edit', compact('service'));
    }

    // Dashboard: update service
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'service_name' => 'required',
            'price' => 'required|numeric',
            'duration_minutes' => 'required|integer',
        ]);
        $service->update($request->only('service_name', 'price', 'duration_minutes'));
        return redirect()->route('dashboard.services')->with('success', 'Service updated.');
    }

    // Dashboard: delete service
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('dashboard.services')->with('success', 'Service deleted.');
    }
}
