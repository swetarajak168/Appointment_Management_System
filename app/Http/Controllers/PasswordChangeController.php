<?php

namespace App\Http\Controllers;

use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class PasswordChangeController extends Controller
{
    //
    public function edit(){
        return view('password.edit');
    }
    public function update(Request $request){
        $request->validate([
            'current_password' => 'required|string',
            'new_password'=>'required|string|min:8|confirmed'

        ]);
        $user = auth()->user();
        if (!Hash::check($request->current_password, $user->password)) {
            Alert::error('Error','Current Password didnt match');
            return redirect()->back();
        }
        else{

            $user->update([
                'password' => Hash::make($request->new_password),
            ]);
            Alert::success('Success', 'Password Changed Successfully');
            return redirect()->back();
        }
    }
}
