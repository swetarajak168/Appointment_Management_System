<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;
use App\Models\Schedule;
use App\Models\Doctor;
use App\Models\User;

class AdminController extends Controller
{
    //
    public function index(){
        $auth_user = auth()->user()->role;                     //checking role for different dashboard view of admin and doctor
        $admin_count =  User::where('role', '=', '1')->count();
        $user_count =  User::count();
        $doctor_count = Doctor::count();
        $booking_count = Booking::count();
        $department_count =Department::count();
        $schedule_count = Schedule::whereNull('deleted_at')->count() ;
        $doctor = auth()->user()->doctor()->first();  
        $department = Department::all();
        $departmentChartData = [
            'labels' => $department->pluck('department_name')->toArray(),
            'values' => [],
        ];
        foreach ($department as $dept) {
            $count = Doctor::where('department_id', $dept->id)->count();
            $values[] = $count;
        }

        $departmentChartData['values'] = $values;
        $approvedbooking = false;
        $data = [
            'auth_user' => $auth_user,
            'doctor'=> $doctor,
            'admin_count'=> $admin_count,
            'user_count'=> $user_count,
            'doctor_count' => $doctor_count,
            'booking_count'=> $booking_count,
            'department_count'=>$department_count,
            'schedule_count'=>$schedule_count,
            'department_name' => $departmentChartData,
            'approvedbooking'=> $approvedbooking
            
        ];
        return view('admin.dashboard',compact('data'));
        
        
    }

    

}
