<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookedNotificationController extends Controller
{
    //
    public function notification(){
        $auth_user = auth()->user()->role;
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
        }
        $data = [
           
            'notification_count'=>  $notification_count,
            'notification_message'=>$notification_data ,
            'readnotification'=>$readnotification

        ];
        dd($data);
        return view('layouts.navigation',compact('data'));


    }
}
