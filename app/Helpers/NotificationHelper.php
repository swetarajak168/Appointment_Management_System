<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;

class NotificationHelper
{
    public static function getNotifications()
    {
        // Retrieve unread database notifications for the authenticated user
        $user = Auth::user();
        if($user->role ==2){
            $doctor = auth()->user()->doctor()->first();
            return [
                'unreadNotifications' => $doctor->unreadNotifications,
                'unreadcount' => $doctor->unreadNotifications->count(),
                'readNotification'=> $doctor->readNotifications,
                'count'=>$doctor->Notifications->count(),
            ];
        }
        else{
            
        }
        return  [];
    }
}