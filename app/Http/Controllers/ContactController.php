<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    //
    public function sendmail(Request $request)
    {
        $formDetail = $request->all();
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
