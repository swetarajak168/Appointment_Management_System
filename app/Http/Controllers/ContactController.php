<?php

namespace App\Http\Controllers;
use App\Rules\ReCaptcha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    //
    public function sendmail(Request $request)
    {
        $formDetail =$request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);
  
        Mail::send(
            'emails.contactmail',
            ['formDetail' => $formDetail],

            function ($message) {
                $message->to('swetarajak168@gmail.com', 'Sweta Rajak')->subject('Client Contact Form');
            }
        );
        Alert::success('Success', 'Message sent');
        return redirect()->back();

    }
}
