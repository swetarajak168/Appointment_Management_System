<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Doctor;
use App\Models\Patient;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
    public function edit(int $id, Request $request)
    {
        $status = $request->input('status');
        $booking = Booking::find($id);
        $booking->status = $status;
        $booking->save();
        Alert::success('Success!','Status Changed Sucessfully!');
        return redirect()->back();
    }
}
