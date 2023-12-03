<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Doctor;
use App\Models\Patient;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class AppointmentController extends Controller
{
    //
    public function index()
    {
        $bookings = Booking::latest()->get();
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
        // dd($status);
        $booking = Booking::findOrFail($id);
        $booking->status = $status;
       
        $booking->save();
        $schedule = $booking->schedule;
    
    if ($schedule) {
        $schedule->status = $status;
        $schedule->save();
    }
        Alert::success('Success!','Status Changed Sucessfully!');
        Mail::send('emails.bookstatus',['booking' => $booking],
        
            function($message){
                $message->to('swetarajak168@gmail.com','Sweta Rajak')->subject('Appointment Booking Detail');
            }
        );
        return redirect()->back();
    }
}
