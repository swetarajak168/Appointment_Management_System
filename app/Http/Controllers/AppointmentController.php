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
        $auth_user = auth()->user();
        // dd($bookings);
        $auth_role = $auth_user->role;
        if($auth_user->doctor){

            $auth_id =  $auth_user->doctor()->first()->id;
        }else{
            $auth_id =  $auth_user->id;
        }
        $data = [
            'bookings' => $bookings,
            'auth_role' => $auth_role,
            'auth_id' => $auth_id
        ];
        return view('appointment.index', compact('data'));
    }
}
