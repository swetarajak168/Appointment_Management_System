<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        $doctor = auth()->user()->doctor()->first();
       
        // return view('admin.dashboard',compact('doctor'));
       

            return view('admin.dashboard',compact('doctor'));
        
        
    }

    

}
