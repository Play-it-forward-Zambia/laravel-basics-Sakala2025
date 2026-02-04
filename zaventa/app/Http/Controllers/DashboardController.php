<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // Show dashboard home
    public function index()
    {
        $user = Auth::user();
        $business = $user->business;
        return view('dashboard.index', compact('user', 'business'));
    }
}
