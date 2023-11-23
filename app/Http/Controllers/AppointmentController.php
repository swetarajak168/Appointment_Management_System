<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Patient;
use App\Models\Doctor;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    //
    public function index()
    {
        $bookings = Booking::get();
        // dd($bookings);
        return view('appointment.index', compact('bookings'));
    }
}
