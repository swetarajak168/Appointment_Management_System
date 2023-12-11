<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Schedule;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function index()
    {
        $auth_user = auth()->user()->role;                     //checking role for different dashboard view of admin and doctor
        $admin_count = User::where('role', '=', '1')->count();
        $user_count = User::count();
        $doctor_count = Doctor::count();
        $booking_count = Booking::count();
        $department_count = Department::count();
        $schedule_count = Schedule::whereNull('deleted_at')->count();
        $doctor = auth()->user()->doctor()->first();

        if($auth_user == 2){
            if($doctor->readNotifications->isNotEmpty()){
                $read_notifications = $doctor->readNotifications;
                foreach($read_notifications as $read_notification){
                    $readnotification[] = $read_notification->data['data'];
                }
            }
            else{
                $readnotification = [];
            }
            if ($doctor->unreadNotifications->isNotEmpty()){
    
                $unread_notifications = $doctor->unreadNotifications;
                $notification_count = $unread_notifications->count();
                
                foreach($unread_notifications as $notification){
                    $notification_data[] = $notification->data['data'];
                }
            }else{
                $notification_count = 0;
                $notification_data = [];
            }
        }else{
            $notification_count = 0;
                $notification_data = [];
                $readnotification = [];

        }
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
            'doctor' => $doctor,
            'admin_count' => $admin_count,
            'user_count' => $user_count,
            'doctor_count' => $doctor_count,
            'booking_count' => $booking_count,
            'department_count' => $department_count,
            'schedule_count' => $schedule_count,
            'department_name' => $departmentChartData,
            'approvedbooking' => $approvedbooking,
            'notification_count'=>  $notification_count,
            'notification_message'=>$notification_data ,
            'readnotification'=>$readnotification

        ];
        return view('admin.dashboard', compact('data'));


    }
    public function markAsRead()
    {
        // dd(Auth::user());
        // Auth::user()->doctor->unreadNotifications->markAsRead();
        return redirect()->back();
    }



}
