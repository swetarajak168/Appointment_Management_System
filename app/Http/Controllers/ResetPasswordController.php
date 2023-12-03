<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorRequest;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class ResetPasswordController extends Controller
{
    //
    public function reset_password(Request $request, Doctor $doctor){
        $new_password = Str::random(8);  
        Mail::send('emails.resetPassword', ['doctor' => $doctor,'new_password'=>$new_password], 
        
        function($message){
            $message->to('swetarajak168@gmail.com','Sweta Rajak')->subject('Reset password');
        });
        
        Alert::success('Success', 'New Password sent to  your mail');
        $doctor->password =  Hash::make( $new_password) ;
        $doctor->save;
        User::where('id',$doctor->id)->update(['password'=> Hash::make( $new_password)]);
        return redirect()->route('doctor.index');
    }
}
