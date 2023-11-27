<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;

class AdminController extends Controller
{
    //
    public function index(){
        $auth_user = auth()->user()->role;                     //checking role for different dashboard view of admin and doctor

        $admin_count =  DB::table('users')->where('role', '=', '1')->count();
        $user_count =  DB::table('users')->count();
        $doctor_count = DB::table('doctors')->count();
        $booking_count = DB::table('bookings')->count();
        $department_count = DB::table('departments')->count();
        $schedule_count = DB::table('schedules')->count() ;
        $department= Department::pluck('department_name')->unique()->values();
        $doctor = auth()->user()->doctor()->first();  
        // dd($doctor->booking);     
        $data = [
            'auth_user' => $auth_user,
            'doctor'=> $doctor,
            'admin_count'=> $admin_count,
            'user_count'=> $user_count,
            'doctor_count' => $doctor_count,
            'booking_count'=> $booking_count,
            'department_count'=>$department_count,
            'schedule_count'=>$schedule_count,
            'department_name'=>$department,
        ];
        return view('admin.dashboard',compact('data'));
    }

    

}
